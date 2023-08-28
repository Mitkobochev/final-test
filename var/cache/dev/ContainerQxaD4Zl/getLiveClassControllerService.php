<?php

namespace ContainerQxaD4Zl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiveClassControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LiveClassController' shared autowired service.
     *
     * @return \App\Controller\LiveClassController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LiveClassController.php';

        $container->services['App\\Controller\\LiveClassController'] = $instance = new \App\Controller\LiveClassController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\LiveClassController', $container));

        return $instance;
    }
}
