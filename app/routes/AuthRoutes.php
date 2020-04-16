<?php

$router->registerRoute('POST', 'login', 'AuthController::login');

$router->registerRoute('POST', 'register', 'AuthController::register');

$router->registerRoute('GET', 'logout', 'AuthController::logout');

$router->registerRoute('GET', 'users', 'AuthController::getUsersList')->middleware('isAuth');

$router->registerRoute('GET', 'users/{:username}', 'AuthController::getUser');

$router->registerRoute('GET', 'profile', 'AuthController::getProfile')->middleware('isAuth');

$router->registerRoute('POST', 'editprofile', 'AuthController::editProfile')->middleware('isAuth');
