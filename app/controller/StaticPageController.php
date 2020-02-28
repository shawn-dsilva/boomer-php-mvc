<?php

include_once '../core/utils/Sessions.php';

class StaticPageController {

  public function init()
  {  }

  public function home () {

    return getView('Home');
  }

  public function dashboard () {
    $data = sessionUserData($_COOKIE['sessionId']);
    return getView('Dashboard',$data);
  }

  public function login () {
    return getView('Login');
  }

  public function register () {
    return getView('Register');
  }
}