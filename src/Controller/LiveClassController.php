<?php

namespace App\Controller;

use App\Entity\LiveClass;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LiveClassController extends AbstractController
{

    #[Route('/admin/live/all', name: 'app_admin_live')]
    public function getAllAdmin(EntityManagerInterface $entityManager, SessionInterface $session): Response {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $liveRepo = $entityManager->getRepository(LiveClass::class);
        $liveClasses = $liveRepo->findAll();

        $formattedLiveClasses = [];
        foreach ($liveClasses as $liveClass) {
            $formattedLiveClasses[] = [
                'id' => $liveClass->getId(),
                'topic' => $liveClass->getTopic(),
                'startTime' => $liveClass->getStartTime(),
                'streamDate' => $liveClass->getStreamDate()->format('Y-m-d'), // Format the date
                'duration' => $liveClass->getDuration(),
                'description' => $liveClass->getDescription(),
                'streamLink' => $liveClass->getStreamLink(),
            ];
        }

        $categories = $liveRepo->findAll();

        return $this->render('admin_panel_live_stream.html', ['videos' => $formattedLiveClasses, 'categories' => $categories]);
    }

    #[Route('/create-live', name: 'app_live_create', methods: ['POST'])]
    public function tomasGeis(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $data = json_decode($request->getContent(), true);

        $livestream = new LiveClass();
        $livestream->setTopic($data['topic']);
        $livestream->setStartTime($data['stream_time']);
        $livestream->setDescription($data['description']);
        $livestream->setStreamLink($data['stream_link']);
        $livestream->setDuration($data['duration']);
        $livestream->setStreamDate(new \DateTime($data['stream_date']));

        $entityManager->persist($livestream);
        $entityManager->flush();

        return $this->json(['message' => 'Livestream created successfully'], Response::HTTP_CREATED);
    }

    #[Route('/delete-live/{id}', name: 'app_live_delete', methods: ['DELETE'])]
    public function tomasGeisAilqk($id, Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $live = $entityManager->getRepository(LiveClass::class)->find($id);

        if (!$live) {
            return new JsonResponse('Category not found', Response::HTTP_NOT_FOUND);
        }

        $entityManager->remove($live);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Livestream deleted successfully']);
    }
    #[Route('/live', name: 'app_live_stream')]
    public function liveStream(SessionInterface $session, EntityManagerInterface $entityManager): Response {
        $userId = $session->get('user_id');
        if (!$userId) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        // Load the user based on user_id (assuming your User class/entity is used)
        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($userId);

        // Check user's role and subscription status
        $userRole = $user->getUserRole();
        $subscriptionEnd = $user->getSubscriptionEnd();

        $today = new \DateTime(); // Current date and time

        // Check if user role is Exclusive or Pro
        if ($userRole !== 'superadmin') {
            if ($userRole !== 'Pro (ΑΕΠΠ + ΑΟΘ)' && $userRole !== 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)') {           // User role is not allowed, render a page indicating the user does not have access
                return $this->render('change_subscription.html');
            }
        }

        // Check if subscription has expired
        if ($subscriptionEnd <= $today) {
            // Subscription has expired, render a page indicating the user does not have access
            return $this->render('change_subscription.html');
        }

        $nextLiveStream = $entityManager->getRepository(LiveClass::class)
            ->findOneBy([], ['stream_date' => 'ASC']); // Get the next entry based on stream_date

        if (!$nextLiveStream) {
            throw $this->createNotFoundException('No upcoming live stream found.');
        }

        $durationParts = explode(':', $nextLiveStream->getDuration());
        $hours = $durationParts[0];
        $minutes = $durationParts[1];

        $streamData = [
            'topic' => $nextLiveStream->getTopic(),
            'description' => $nextLiveStream->getDescription(),
            'hours' => $hours, // Split duration into hours
            'minutes' => $minutes, // Split duration into minutes
            'startTime' => $nextLiveStream->getStartTime(),
            'streamLink' => $nextLiveStream->getStreamLink(),
            'streamDate' => $nextLiveStream->getStreamDate(),
        ];

        // You can now use the $streamData array to set up further queries or operations

        return $this->render('live-class.html', ['streamData' => $streamData]);
    }


}