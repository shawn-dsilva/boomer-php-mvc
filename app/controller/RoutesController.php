<?php

$router->registerRoute('GET', "", 'StaticPageController::home')->middleware('isAuth');
$router->registerRoute('GET', 'home', 'StaticPageController::home')->middleware('isAuth');
$router->registerRoute('GET', 'index.php', 'StaticPageController::home')->middleware('isAuth');

$router->registerRoute('GET', 'dashboard', 'StaticPageController::dashboard')->middleware('isAuth');
$router->registerRoute('GET', 'login', 'StaticPageController::login')->middleware('isAuth');
$router->registerRoute('GET', 'register', 'StaticPageController::register')->middleware('isAuth');

$router->registerRoute('POST', 'login', 'AuthController::login');

$router->registerRoute('POST', 'register', 'AuthController::register');

$router->registerRoute('GET', 'logout', 'AuthController::logout');

$router->registerRoute('GET', 'users/{:username}', 'AuthController::getUser');
$router->registerRoute('GET', 'users/{:username}/posts/{:post}', 'StaticPageController::home');

$router->registerRoute('POST', 'addpost', 'PostController::addPost')->middleware('isAuth');
$router->registerRoute('GET', 'getpost', 'PostController::getPosts')->middleware('isAuth');
$router->registerRoute('POST', 'deletepost', 'PostController::removePost')->middleware('isAuth');

// $router->registerRoute('GET', 'users-list', 'UserController@index');
// $router->registerRoute('POST', 'users', 'UserController@store');