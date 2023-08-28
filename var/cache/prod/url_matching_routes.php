<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/categories' => [[['_route' => 'app_admin_categories', '_controller' => 'App\\Controller\\CategoriesController::getAllAdminCategories'], null, null, null, false, false, null]],
        '/admin/create-category' => [[['_route' => 'app_categories_createcategory', '_controller' => 'App\\Controller\\CategoriesController::createCategory'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/exercise/create' => [[['_route' => 'app_create_exercise', '_controller' => 'App\\Controller\\ExerciseController::createExercise'], null, ['POST' => 0], null, false, false, null]],
        '/admin-video/create' => [[['_route' => 'app_create_video', '_controller' => 'App\\Controller\\LessonController::createVideo'], null, ['POST' => 0], null, false, false, null]],
        '/admin/live/all' => [[['_route' => 'app_admin_live', '_controller' => 'App\\Controller\\LiveClassController::getAllAdmin'], null, null, null, false, false, null]],
        '/create-live' => [[['_route' => 'app_live_create', '_controller' => 'App\\Controller\\LiveClassController::tomasGeis'], null, ['POST' => 0], null, false, false, null]],
        '/live' => [[['_route' => 'app_live_stream', '_controller' => 'App\\Controller\\LiveClassController::liveStream'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'app_pricing', '_controller' => 'App\\Controller\\PricingAndCheckout::pricing'], null, null, null, false, false, null]],
        '/charge' => [[['_route' => 'app_charge', '_controller' => 'App\\Controller\\PricingAndCheckout::createCharge'], null, ['POST' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\UserController::homepage'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\UserController::pageNotFound'], null, null, null, false, false, null]],
        '/account/forgot-password' => [[['_route' => 'app_user_forgot_password', '_controller' => 'App\\Controller\\UserController::forgotPassword'], null, null, null, false, false, null]],
        '/account/login' => [[['_route' => 'app_user_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/account/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/account/register' => [[['_route' => 'app_user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/account/my-profile' => [[['_route' => 'app_my_profile', '_controller' => 'App\\Controller\\UserController::myProfile'], null, null, null, false, false, null]],
        '/account/general' => [[['_route' => 'app_user_general', '_controller' => 'App\\Controller\\UserController::general'], null, null, null, false, false, null]],
        '/account/change-password' => [[['_route' => 'app_user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_us', '_controller' => 'App\\Controller\\UserController::contactUs'], null, null, null, false, false, null]],
        '/become-teacher' => [[['_route' => 'app_teacher', '_controller' => 'App\\Controller\\UserController::becomeTeacher'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UserController::getUsers'], null, null, null, false, false, null]],
        '/admin/users/create/new' => [[['_route' => 'app_admin_create_user', '_controller' => 'App\\Controller\\UserController::createUser'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin(?'
                    .'|/(?'
                        .'|category\\-(?'
                            .'|delete/([^/]++)(*:48)'
                            .'|update/([^/]++)(*:70)'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|(*:95)'
                            .'|/delete(*:109)'
                        .')'
                    .')'
                    .'|\\-panel(?'
                        .'|/exercise(?'
                            .'|(?:/([^/]++))?(*:155)'
                            .'|/delete/([^/]++)(*:179)'
                        .')'
                        .'|(?:/([^/]++))?(*:202)'
                    .')'
                .')'
                .'|/e(?'
                    .'|xercise(?'
                        .'|\\-category(?:/([^/]++))?(*:251)'
                        .'|s/([^/]++)(?'
                            .'|/([^/]++)(*:281)'
                            .'|(*:289)'
                        .')'
                    .')'
                    .'|dit\\-(?'
                        .'|exercise/([^/]++)/edit(*:329)'
                        .'|video/([^/]++)/edit(*:356)'
                    .')'
                .')'
                .'|/video(?'
                    .'|/([^/]++)(*:384)'
                    .'|s(?'
                        .'|/([^/]++)/([^/]++)(*:414)'
                        .'|\\-category(?:/([^/]++))?(*:446)'
                    .')'
                .')'
                .'|/delete\\-(?'
                    .'|video/([^/]++)(*:482)'
                    .'|live/([^/]++)(*:503)'
                .')'
                .'|/checkout/([^/]++)(*:530)'
                .'|/get\\-promo\\-code\\-discount/([^/]++)(*:574)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'app_admin_delete_category', '_controller' => 'App\\Controller\\CategoriesController::deleteCategories'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'app_admin_update_category', '_controller' => 'App\\Controller\\CategoriesController::updateCategory'], ['id'], ['PUT' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_admin_edit_user', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'app_admin_delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, false, null]],
        155 => [[['_route' => 'app_exercise_admin', 'category' => null, '_controller' => 'App\\Controller\\ExerciseController::exercisesByCategory'], ['category'], null, null, false, true, null]],
        179 => [[['_route' => 'app_delete_exercise', '_controller' => 'App\\Controller\\ExerciseController::deleteExercise'], ['id'], ['DELETE' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_video_admin', 'category' => null, '_controller' => 'App\\Controller\\LessonController::videosByCategory'], ['category'], null, null, false, true, null]],
        251 => [[['_route' => 'app_exercise_category', 'category' => null, '_controller' => 'App\\Controller\\ExerciseController::lessonsByCategory'], ['category'], null, null, false, true, null]],
        281 => [[['_route' => 'app_exercise_page', '_controller' => 'App\\Controller\\ExerciseController::getThemes'], ['category', 'subcategory'], null, null, false, true, null]],
        289 => [[['_route' => 'app_exercise_view', '_controller' => 'App\\Controller\\ExerciseController::openExercisePage'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'app_edit_exercise', '_controller' => 'App\\Controller\\ExerciseController::editExercise'], ['id'], null, null, false, false, null]],
        356 => [[['_route' => 'app_edit_video', '_controller' => 'App\\Controller\\LessonController::edit_video'], ['id'], ['PUT' => 0], null, false, false, null]],
        384 => [[['_route' => 'app_video_id', '_controller' => 'App\\Controller\\LessonController::getVideoById'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'app_video_lessons', '_controller' => 'App\\Controller\\LessonController::lessons'], ['id', 'category'], null, null, false, true, null]],
        446 => [[['_route' => 'app_video_category', 'category' => null, '_controller' => 'App\\Controller\\LessonController::lessonsByCategory'], ['category'], null, null, false, true, null]],
        482 => [[['_route' => 'app_delete_video', '_controller' => 'App\\Controller\\LessonController::deleteVideo'], ['id'], null, null, false, true, null]],
        503 => [[['_route' => 'app_live_delete', '_controller' => 'App\\Controller\\LiveClassController::tomasGeisAilqk'], ['id'], ['DELETE' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\PricingAndCheckout::checkout'], ['plan_id'], null, null, false, true, null]],
        574 => [
            [['_route' => 'app_pricingandcheckout_getpromocode', '_controller' => 'App\\Controller\\PricingAndCheckout::getPromoCode'], ['promocode'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
