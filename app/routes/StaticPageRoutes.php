<?php
$router->registerRoute('GET', "js/main.js", 'StaticPageController::js');
$router->registerRoute('GET', 'css/main.css', 'StaticPageController::css');

$router->registerRoute('GET', "", 'StaticPageController::home')->middleware('isAuth');
$router->registerRoute('GET', 'home', 'StaticPageController::home')->middleware('isAuth');
$router->registerRoute('GET', 'index.php', 'StaticPageController::home')->middleware('isAuth');

$router->registerRoute('GET', 'dashboard', 'StaticPageController::dashboard')->middleware('isAuth');
$router->registerRoute('GET', 'login', 'StaticPageController::login')->middleware('isAuth');
$router->registerRoute('GET', 'register', 'StaticPageController::register')->middleware('isAuth');

$router->registerRoute('GET', 'users/{:username}/posts/{:post}', 'StaticPageController::home');

$router->registerRoute('GET', 'postlist', 'StaticPageController::postlist')->middleware('isAuth');

$router->registerRoute('GET', 'createpost', 'StaticPageController::createpost')->middleware('isAuth');
