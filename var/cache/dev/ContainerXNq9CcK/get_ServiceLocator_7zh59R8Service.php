<?php

namespace ContainerXNq9CcK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7zh59R8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7zh59R8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7zh59R8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'session' => ['privates', '.errored.db54xSn', NULL, 'Cannot determine controller argument for "App\\Controller\\LiveClassController::liveStream()": the $session argument is type-hinted with the non-existent class or interface: "App\\Controller\\Session". Did you forget to add a use statement?'],
        ], [
            'entityManager' => '?',
            'session' => '?',
        ]);
    }
}
