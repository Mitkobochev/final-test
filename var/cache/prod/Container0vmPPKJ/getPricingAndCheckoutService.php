<?php

namespace Container0vmPPKJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPricingAndCheckoutService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PricingAndCheckout' shared autowired service.
     *
     * @return \App\Controller\PricingAndCheckout
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PricingAndCheckout'] = $instance = new \App\Controller\PricingAndCheckout();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PricingAndCheckout', $container));

        return $instance;
    }
}
