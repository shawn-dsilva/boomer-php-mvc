<?php

$router->registerRoute('GET', "", 'StaticPageController::home');
$router->registerRoute('GET', 'home', 'StaticPageController::home');

$router->registerRoute('GET', 'dashboard', 'StaticPageController::dashboard');
// $router->registerRoute('GET', 'users-list', 'UserController@index');
// $router->registerRoute('POST', 'users', 'UserController@store');