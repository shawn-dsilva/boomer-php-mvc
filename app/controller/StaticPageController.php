<?php

include_once '../app/controller/SessionsController.php';


class StaticPageController {
  public static $mwReturns = [];
  public static $data = [];

  public function init($mwReturns)
  {     self::$mwReturns = $mwReturns;
    if(self::$mwReturns['isAuth'] == TRUE) {
      self::$data['user_data'] = sessionUserData($_COOKIE['sessionId']);
    }

  }

  public function home () {
    return getView('Home', self::$data);
  }

  public function dashboard () {
    // die(var_dump(self::$data['user_data']));
    // exit();
    // $data['posts'] = $pc->getPosts($data['user_data']['id']);
    return getView('Dashboard',self::$data);
  }

  public function login () {
    return getView('Login');
  }

  public function register () {
    return getView('Register');
  }
}