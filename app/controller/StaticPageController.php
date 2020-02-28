<?php

include_once '../app/controller/SessionsController.php';
include_once '../app/models/UserModel.php';

class StaticPageController {

  public function init()
  {  }

  public function home () {

    return getView('Home');
  }

  public function dashboard () {
    $user_model = new UserModel;
    $data = sessionUserData($user_model, $_COOKIE['sessionId']);
    return getView('Dashboard',$data);
  }

  public function login () {
    return getView('Login');
  }

  public function register () {
    return getView('Register');
  }
}