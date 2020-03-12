<?php

include_once '../app/controller/SessionsController.php';


class StaticPageController {

  public function init()
  {  }

  public function home () {

    return getView('Home');
  }

  public function dashboard () {
    $pc = new PostController;
    $data['user_data'] = sessionUserData($_COOKIE['sessionId']);
    $data['posts'] = $pc->getPosts($data['user_data']['id']);
    return getView('Dashboard',$data);
  }

  public function login () {
    return getView('Login');
  }

  public function register () {
    return getView('Register');
  }
}