<?php

namespace Container0vmPPKJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLessonControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LessonController' shared autowired service.
     *
     * @return \App\Controller\LessonController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LessonController'] = $instance = new \App\Controller\LessonController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\LessonController', $container));

        return $instance;
    }
}
