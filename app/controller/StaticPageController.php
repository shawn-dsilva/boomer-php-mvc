<?php

include_once '../app/controller/SessionsController.php';
include_once('../app/controller/BaseController.php');


class StaticPageController extends BaseController {
  public static $data = [];

  public function init($mwReturns)
  {
  }

  public function home () {
    // die(var_dump(self::$mwReturns));
    return self::getView('Home');
  }

  public function dashboard () {
    // die(var_dump(self::$data['user_data']));
    // exit();
    // $data['posts'] = $pc->getPosts($data['user_data']['id']);
    return self::getView('Dashboard',self::$data);
  }

  public function login () {
    return self::getView('Login');
  }

  public function register () {
    return self::getView('Register');
  }


  public function postlist () {
    return self::getView('PostList');
  }

  public function createpost () {
    return self::getView('CreatePost');
  }

  public static function err404($msg) {
    self::$data['user_data'] = sessionUserData($_COOKIE['sessionId']);
    self::$data['msg'] = $msg;
    return self::getView('Error404');
  }
}