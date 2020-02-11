<?php

$router->registerRoute('GET', "", 'StaticPageController::home');
$router->registerRoute('GET', 'home', 'StaticPageController::home');

$router->registerRoute('GET', 'dashboard', 'StaticPageController::dashboard');
$router->registerRoute('GET', 'login', 'StaticPageController::login');
$router->registerRoute('GET', 'login', 'StaticPageController::register');

$router->registerRoute('POST', 'login', 'AuthController::login');

$router->registerRoute('POST', 'register', 'AuthController::register');
// $router->registerRoute('GET', 'users-list', 'UserController@index');
// $router->registerRoute('POST', 'users', 'UserController@store');