<?php

namespace Container0vmPPKJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiveClassRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LiveClassRepository' shared autowired service.
     *
     * @return \App\Repository\LiveClassRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LiveClassRepository'] = new \App\Repository\LiveClassRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
