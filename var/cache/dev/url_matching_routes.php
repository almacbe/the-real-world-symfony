<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/articles' => [
            [['_route' => 'realworld_articles_list', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'realworld_articles_create', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/articles/feed' => [[['_route' => 'realworld_articles_feed', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::feed'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'realworld_user_register', '_controller' => 'App\\Ui\\Http\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/login' => [[['_route' => 'realworld_user_login', '_controller' => 'App\\Ui\\Http\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/tags' => [[['_route' => 'realworld_tags_list', '_controller' => 'App\\Ui\\Http\\Controller\\TagController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/user' => [
            [['_route' => 'realworld_user_current', '_controller' => 'App\\Ui\\Http\\Controller\\UserController::current'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'realworld_user_update', '_controller' => 'App\\Ui\\Http\\Controller\\UserController::update'], null, ['PUT' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|articles/([^/]++)(?'
                        .'|(*:35)'
                        .'|/(?'
                            .'|favorite(?'
                                .'|(*:57)'
                            .')'
                            .'|comments(?'
                                .'|(*:76)'
                                .'|/([^/]++)(*:92)'
                            .')'
                        .')'
                    .')'
                    .'|profiles/([^/]++)(?'
                        .'|(*:122)'
                        .'|/follow(?'
                            .'|(*:140)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => 'realworld_articles_get', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::get'], ['slug'], ['GET' => 0], null, false, true, null],
            [['_route' => 'realworld_articles_update', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::update'], ['slug'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'realworld_articles_delete', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleController::delete'], ['slug'], ['DELETE' => 0], null, false, true, null],
        ],
        57 => [
            [['_route' => 'realworld_articles_favorite', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleFavoriteController::favorite'], ['slug'], ['POST' => 0], null, false, false, null],
            [['_route' => 'realworld_articles_unfavorite', '_controller' => 'App\\Ui\\Http\\Controller\\ArticleFavoriteController::unfavorite'], ['slug'], ['DELETE' => 0], null, false, false, null],
        ],
        76 => [
            [['_route' => 'realworld_comments_list', '_controller' => 'App\\Ui\\Http\\Controller\\CommentController::list'], ['slug'], ['GET' => 0], null, false, false, null],
            [['_route' => 'realworld_comments_create', '_controller' => 'App\\Ui\\Http\\Controller\\CommentController::create'], ['slug'], ['POST' => 0], null, false, false, null],
        ],
        92 => [[['_route' => 'realworld_comments_delete', '_controller' => 'App\\Ui\\Http\\Controller\\CommentController::delete'], ['slug', 'id'], ['DELETE' => 0], null, false, true, null]],
        122 => [[['_route' => 'realworld_profile_get', '_controller' => 'App\\Ui\\Http\\Controller\\ProfileController::show'], ['username'], ['GET' => 0], null, false, true, null]],
        140 => [
            [['_route' => 'realworld_profile_follow', '_controller' => 'App\\Ui\\Http\\Controller\\ProfileController::follow'], ['username'], ['POST' => 0], null, false, false, null],
            [['_route' => 'realworld_profile_unfollow', '_controller' => 'App\\Ui\\Http\\Controller\\ProfileController::unfollow'], ['username'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
