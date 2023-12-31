<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin_categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::getAllAdminCategories'], [], [['text', '/admin/categories']], [], [], []],
    'app_categories_createcategory' => [[], ['_controller' => 'App\\Controller\\CategoriesController::createCategory'], [], [['text', '/admin/create-category']], [], [], []],
    'app_admin_delete_category' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::deleteCategories'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category-delete']], [], [], []],
    'app_admin_update_category' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::updateCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category-update']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_exercise_category' => [['category'], ['category' => null, '_controller' => 'App\\Controller\\ExerciseController::lessonsByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/exercise-category']], [], [], []],
    'app_exercise_page' => [['category', 'subcategory'], ['_controller' => 'App\\Controller\\ExerciseController::getThemes'], [], [['variable', '/', '[^/]++', 'subcategory', true], ['variable', '/', '[^/]++', 'category', true], ['text', '/exercises']], [], [], []],
    'app_exercise_view' => [['id'], ['_controller' => 'App\\Controller\\ExerciseController::openExercisePage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exercises']], [], [], []],
    'app_exercise_admin' => [['category'], ['category' => null, '_controller' => 'App\\Controller\\ExerciseController::exercisesByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/admin-panel/exercise']], [], [], []],
    'app_create_exercise' => [[], ['_controller' => 'App\\Controller\\ExerciseController::createExercise'], [], [['text', '/admin/exercise/create']], [], [], []],
    'app_edit_exercise' => [['id'], ['_controller' => 'App\\Controller\\ExerciseController::editExercise'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/edit-exercise']], [], [], []],
    'app_delete_exercise' => [['id'], ['_controller' => 'App\\Controller\\ExerciseController::deleteExercise'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin-panel/exercise/delete']], [], [], []],
    'app_video_id' => [['id'], ['_controller' => 'App\\Controller\\LessonController::getVideoById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_lessons' => [['id', 'category'], ['_controller' => 'App\\Controller\\LessonController::lessons'], [], [['variable', '/', '[^/]++', 'category', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/videos']], [], [], []],
    'app_video_category' => [['category'], ['category' => null, '_controller' => 'App\\Controller\\LessonController::lessonsByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/videos-category']], [], [], []],
    'app_edit_video' => [['id'], ['_controller' => 'App\\Controller\\LessonController::edit_video'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/edit-video']], [], [], []],
    'app_create_video' => [[], ['_controller' => 'App\\Controller\\LessonController::createVideo'], [], [['text', '/admin-video/create']], [], [], []],
    'app_delete_video' => [['id'], ['_controller' => 'App\\Controller\\LessonController::deleteVideo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete-video']], [], [], []],
    'app_video_admin' => [['category'], ['category' => null, '_controller' => 'App\\Controller\\LessonController::videosByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/admin-panel']], [], [], []],
    'app_admin_live' => [[], ['_controller' => 'App\\Controller\\LiveClassController::getAllAdmin'], [], [['text', '/admin/live/all']], [], [], []],
    'app_live_create' => [[], ['_controller' => 'App\\Controller\\LiveClassController::tomasGeis'], [], [['text', '/create-live']], [], [], []],
    'app_live_delete' => [['id'], ['_controller' => 'App\\Controller\\LiveClassController::tomasGeisAilqk'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete-live']], [], [], []],
    'app_live_stream' => [[], ['_controller' => 'App\\Controller\\LiveClassController::liveStream'], [], [['text', '/live']], [], [], []],
    'app_pricing' => [[], ['_controller' => 'App\\Controller\\PricingAndCheckout::pricing'], [], [['text', '/pricing']], [], [], []],
    'app_checkout' => [['plan_id'], ['_controller' => 'App\\Controller\\PricingAndCheckout::checkout'], [], [['variable', '/', '[^/]++', 'plan_id', true], ['text', '/checkout']], [], [], []],
    'app_pricingandcheckout_getpromocode' => [['promocode'], ['_controller' => 'App\\Controller\\PricingAndCheckout::getPromoCode'], [], [['variable', '/', '[^/]++', 'promocode', true], ['text', '/get-promo-code-discount']], [], [], []],
    'app_charge' => [[], ['_controller' => 'App\\Controller\\PricingAndCheckout::createCharge'], [], [['text', '/charge']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], [], []],
    'app_home_page' => [[], ['_controller' => 'App\\Controller\\UserController::homepage'], [], [['text', '/']], [], [], []],
    'app_404' => [[], ['_controller' => 'App\\Controller\\UserController::pageNotFound'], [], [['text', '/404']], [], [], []],
    'app_user_forgot_password' => [[], ['_controller' => 'App\\Controller\\UserController::forgotPassword'], [], [['text', '/account/forgot-password']], [], [], []],
    'app_user_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/account/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/account/logout']], [], [], []],
    'app_user_register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/account/register']], [], [], []],
    'app_my_profile' => [[], ['_controller' => 'App\\Controller\\UserController::myProfile'], [], [['text', '/account/my-profile']], [], [], []],
    'app_user_general' => [[], ['_controller' => 'App\\Controller\\UserController::general'], [], [['text', '/account/general']], [], [], []],
    'app_user_change_password' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/account/change-password']], [], [], []],
    'app_contact_us' => [[], ['_controller' => 'App\\Controller\\UserController::contactUs'], [], [['text', '/contact']], [], [], []],
    'app_teacher' => [[], ['_controller' => 'App\\Controller\\UserController::becomeTeacher'], [], [['text', '/become-teacher']], [], [], []],
    'app_admin_users' => [[], ['_controller' => 'App\\Controller\\UserController::getUsers'], [], [['text', '/admin/users']], [], [], []],
    'app_admin_edit_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::editUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'app_admin_delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'app_admin_create_user' => [[], ['_controller' => 'App\\Controller\\UserController::createUser'], [], [['text', '/admin/users/create/new']], [], [], []],
];
