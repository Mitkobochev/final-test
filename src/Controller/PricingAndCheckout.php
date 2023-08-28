<?php

namespace App\Controller;

use App\Entity\Pricing;
use App\Entity\PromoCodes;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\Charge;

class PricingAndCheckout extends AbstractController
{
    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(EntityManagerInterface $entityManager)
    {
        $pricingRepository = $entityManager->getRepository(Pricing::class);
        $pricing = $pricingRepository->findAll();

        return $this->render('pricing.html', [
            'pricing' => $pricing,
        ]);
    }

    #[Route('/checkout/{plan_id}', name: 'app_checkout')]
    public function checkout(Request $request, EntityManagerInterface $entityManager, $plan_id)
    {
        $pricingRepository = $entityManager->getRepository(Pricing::class);

        $pricing = $pricingRepository->find($plan_id);

        return $this->render('checkout.html', [
            'pricing' => $pricing,
            'stripe_key' => $_ENV["STRIPE_KEY"],
            'paypal_client_id' => $_ENV["PAYPAL_CLIENT_ID"],
            'plan_id' => $plan_id,
        ]);

    }

    #[Route('/get-promo-code-discount/{promocode}')]
    public function  getPromoCode($promocode, EntityManagerInterface $entityManager){
        $codeRepository = $entityManager->getRepository(PromoCodes::class);

        $promo_code = $codeRepository->findOneBy(['name' => $promocode]);

        if ($promo_code) {
            $discountPercentage = $promo_code->getDiscount();
            return new JsonResponse(['discount' => $discountPercentage]);
        }

        return new JsonResponse(['discount' => null]);

    }

    #[Route('/charge', name: 'app_charge', methods: ['POST'])]
    public function createCharge(Request $request, SessionInterface $session, EntityManagerInterface $entityManager)
    {
        Stripe::setApiKey($_ENV["STRIPE_SECRET"]);

        try {
            $amount = $request->request->get('amount');
            $discountCode = $request->request->get('promo_code'); // Assuming the input field name is 'promo_code'

            $discount = $entityManager->getRepository(PromoCodes::class)->findOneBy(['name' => $discountCode]);
            $chargeAmount = $amount;
            if ($discount) {
                // Calculate the final charge amount after applying the discount
                $finalChargeAmount = $chargeAmount;
                // Convert the final charge amount to an integer and then format as a string
                $chargeAmount = number_format((int) $finalChargeAmount, 0, '', '');
            }

            $charge = Charge::create([
                "amount" => $chargeAmount,
                "currency" => "eur",
                "source" => $request->request->get('stripeToken'),
            ]);
            $userId = $session->get('user_id');
            $user = $entityManager->getRepository(Users::class)->find($userId);
            if ($charge->status === 'succeeded') {
                if ($user) {
                    $pricingName = $request->request->get('pricing_name');
                    $user->setUserRole($pricingName);
                    $subscriptionEnd = new \DateTime();
                    $subscriptionEnd->add(new \DateInterval('P30D'));
                    $user->setSubscriptionEnd($subscriptionEnd);
                    $entityManager->persist($user);
                    $entityManager->flush();
                }

                // Return a message instead of redirecting
                return $this->render('my-profile.html', [
                    'message' => 'Payment successful! Your role has been updated to Tier 1.'
                ]);
            } else {
                throw new \Exception('Payment Failed');
            }
        } catch (\Exception $e) {
            $this->addFlash(
                'error',
                'Payment Failed: ' . $e->getMessage()
            );
        }

        return $this->redirectToRoute('app_my_profile');
    }





}