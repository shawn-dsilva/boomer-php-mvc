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
$router->registerRoute('GET', 'post/{:postid}', 'PostController::getOnePost')->middleware('isAuth');

$router->registerRoute('POST', 'deletepost', 'PostController::removePost')->middleware('isAuth');

$router->registerRoute('GET', 'profile', 'AuthController::getProfile')->middleware('isAuth');

$router->registerRoute('GET', 'postlist', 'StaticPageController::postlist')->middleware('isAuth');

$router->registerRoute('GET', 'getcomments/{:postid}', 'PostController::getComments')->middleware('isAuth');

$router->registerRoute('GET', 'createpost', 'StaticPageController::createpost')->middleware('isAuth');

$router->registerRoute('GET', 'editpostform/{:postid}', 'PostController::getEditPostForm')->middleware('isAuth');

$router->registerRoute('POST', 'editpost', 'PostController::editPost')->middleware('isAuth');

$router->registerRoute('POST', 'editprofile', 'AuthController::editProfile')->middleware('isAuth');

$router->registerRoute('POST', 'addcomment', 'PostController::addComment')->middleware('isAuth');

// $router->registerRoute('GET', 'users-list', 'UserController@index');
// $router->registerRoute('POST', 'users', 'UserController@store');