<?php

namespace ContainerXNq9CcK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UafWeOiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UafWeOi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UafWeOi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CategoriesController::createCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController::deleteCategories' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController::getAllAdminCategories' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController::updateCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::createExercise' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::deleteExercise' => ['privates', '.service_locator.rJ7865f', 'get_ServiceLocator_RJ7865fService', true],
            'App\\Controller\\ExerciseController::editExercise' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::exercisesByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::getThemes' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::lessonsByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController::openExercisePage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::createVideo' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::deleteVideo' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::edit_video' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::getVideoById' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::lessons' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::lessonsByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController::videosByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController::getAllAdmin' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController::liveStream' => ['privates', '.service_locator.7zh59R8', 'get_ServiceLocator_7zh59R8Service', true],
            'App\\Controller\\LiveClassController::tomasGeis' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController::tomasGeisAilqk' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout::checkout' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout::createCharge' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout::getPromoCode' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout::pricing' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::becomeTeacher' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\UserController::changePassword' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::contactUs' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\UserController::createUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::deleteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::forgotPassword' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::general' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::getUsers' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::register' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CategoriesController:createCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController:deleteCategories' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController:getAllAdminCategories' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategoriesController:updateCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:createExercise' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:deleteExercise' => ['privates', '.service_locator.rJ7865f', 'get_ServiceLocator_RJ7865fService', true],
            'App\\Controller\\ExerciseController:editExercise' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:exercisesByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:getThemes' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:lessonsByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciseController:openExercisePage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:createVideo' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:deleteVideo' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:edit_video' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:getVideoById' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:lessons' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:lessonsByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LessonController:videosByCategory' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController:getAllAdmin' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController:liveStream' => ['privates', '.service_locator.7zh59R8', 'get_ServiceLocator_7zh59R8Service', true],
            'App\\Controller\\LiveClassController:tomasGeis' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LiveClassController:tomasGeisAilqk' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout:checkout' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout:createCharge' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout:getPromoCode' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PricingAndCheckout:pricing' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:becomeTeacher' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\UserController:changePassword' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:contactUs' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\UserController:createUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:deleteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:forgotPassword' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:general' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:getUsers' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:register' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CategoriesController::createCategory' => '?',
            'App\\Controller\\CategoriesController::deleteCategories' => '?',
            'App\\Controller\\CategoriesController::getAllAdminCategories' => '?',
            'App\\Controller\\CategoriesController::updateCategory' => '?',
            'App\\Controller\\ExerciseController::createExercise' => '?',
            'App\\Controller\\ExerciseController::deleteExercise' => '?',
            'App\\Controller\\ExerciseController::editExercise' => '?',
            'App\\Controller\\ExerciseController::exercisesByCategory' => '?',
            'App\\Controller\\ExerciseController::getThemes' => '?',
            'App\\Controller\\ExerciseController::lessonsByCategory' => '?',
            'App\\Controller\\ExerciseController::openExercisePage' => '?',
            'App\\Controller\\LessonController::createVideo' => '?',
            'App\\Controller\\LessonController::deleteVideo' => '?',
            'App\\Controller\\LessonController::edit_video' => '?',
            'App\\Controller\\LessonController::getVideoById' => '?',
            'App\\Controller\\LessonController::lessons' => '?',
            'App\\Controller\\LessonController::lessonsByCategory' => '?',
            'App\\Controller\\LessonController::videosByCategory' => '?',
            'App\\Controller\\LiveClassController::getAllAdmin' => '?',
            'App\\Controller\\LiveClassController::liveStream' => '?',
            'App\\Controller\\LiveClassController::tomasGeis' => '?',
            'App\\Controller\\LiveClassController::tomasGeisAilqk' => '?',
            'App\\Controller\\PricingAndCheckout::checkout' => '?',
            'App\\Controller\\PricingAndCheckout::createCharge' => '?',
            'App\\Controller\\PricingAndCheckout::getPromoCode' => '?',
            'App\\Controller\\PricingAndCheckout::pricing' => '?',
            'App\\Controller\\UserController::becomeTeacher' => '?',
            'App\\Controller\\UserController::changePassword' => '?',
            'App\\Controller\\UserController::contactUs' => '?',
            'App\\Controller\\UserController::createUser' => '?',
            'App\\Controller\\UserController::deleteUser' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::forgotPassword' => '?',
            'App\\Controller\\UserController::general' => '?',
            'App\\Controller\\UserController::getUsers' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Controller\\UserController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CategoriesController:createCategory' => '?',
            'App\\Controller\\CategoriesController:deleteCategories' => '?',
            'App\\Controller\\CategoriesController:getAllAdminCategories' => '?',
            'App\\Controller\\CategoriesController:updateCategory' => '?',
            'App\\Controller\\ExerciseController:createExercise' => '?',
            'App\\Controller\\ExerciseController:deleteExercise' => '?',
            'App\\Controller\\ExerciseController:editExercise' => '?',
            'App\\Controller\\ExerciseController:exercisesByCategory' => '?',
            'App\\Controller\\ExerciseController:getThemes' => '?',
            'App\\Controller\\ExerciseController:lessonsByCategory' => '?',
            'App\\Controller\\ExerciseController:openExercisePage' => '?',
            'App\\Controller\\LessonController:createVideo' => '?',
            'App\\Controller\\LessonController:deleteVideo' => '?',
            'App\\Controller\\LessonController:edit_video' => '?',
            'App\\Controller\\LessonController:getVideoById' => '?',
            'App\\Controller\\LessonController:lessons' => '?',
            'App\\Controller\\LessonController:lessonsByCategory' => '?',
            'App\\Controller\\LessonController:videosByCategory' => '?',
            'App\\Controller\\LiveClassController:getAllAdmin' => '?',
            'App\\Controller\\LiveClassController:liveStream' => '?',
            'App\\Controller\\LiveClassController:tomasGeis' => '?',
            'App\\Controller\\LiveClassController:tomasGeisAilqk' => '?',
            'App\\Controller\\PricingAndCheckout:checkout' => '?',
            'App\\Controller\\PricingAndCheckout:createCharge' => '?',
            'App\\Controller\\PricingAndCheckout:getPromoCode' => '?',
            'App\\Controller\\PricingAndCheckout:pricing' => '?',
            'App\\Controller\\UserController:becomeTeacher' => '?',
            'App\\Controller\\UserController:changePassword' => '?',
            'App\\Controller\\UserController:contactUs' => '?',
            'App\\Controller\\UserController:createUser' => '?',
            'App\\Controller\\UserController:deleteUser' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:forgotPassword' => '?',
            'App\\Controller\\UserController:general' => '?',
            'App\\Controller\\UserController:getUsers' => '?',
            'App\\Controller\\UserController:login' => '?',
            'App\\Controller\\UserController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
