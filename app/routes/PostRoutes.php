<?php


$router->registerRoute('POST', 'addpost', 'PostController::addPost')->middleware('isAuth');
$router->registerRoute('GET', 'getpost', 'PostController::getPosts')->middleware('isAuth');
$router->registerRoute('GET', 'post/{:postid}', 'PostController::getOnePost')->middleware('isAuth');

$router->registerRoute('POST', 'deletepost', 'PostController::removePost')->middleware('isAuth');

$router->registerRoute('GET', 'posts', 'PostController::getAllPosts')->middleware('isAuth');

$router->registerRoute('GET', 'editpostform/{:postid}', 'PostController::getEditPostForm')->middleware('isAuth');


$router->registerRoute('GET', 'removecomment/{:commentid}', 'PostController::removeComment')->middleware('isAuth');



$router->registerRoute('POST', 'editpost', 'PostController::editPost')->middleware('isAuth');

$router->registerRoute('POST', 'addcomment', 'PostController::addComment')->middleware('isAuth');

$router->registerRoute('POST', 'editcomment', 'PostController::editComment')->middleware('isAuth');