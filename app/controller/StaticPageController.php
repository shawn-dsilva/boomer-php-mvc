<?php

include_once('../core/sessions/SessionsController.php');
include_once('../app/controller/BaseController.php');


class StaticPageController extends BaseController {
  public static $data = [];

  public function init($mwReturns)
  {
  }

  public function home () {
    // die(var_dump($this->$mwReturns));
    return $this->getView('Home');
  }

  public function dashboard () {
    // die(var_dump($this->mwReturns));
    // exit();
    // $data['posts'] = $pc->getPosts($data['user_data']['id']);
    return $this->getView('Dashboard');
  }

  public function login () {
    return $this->getView('Login');
  }

  public function register () {
    return $this->getView('Register');
  }


  public function postlist () {
    return $this->getView('PostList');
  }

  public function createpost () {
    return $this->getView('CreatePost');
  }

  public static function err404($msg) {
    $data['msg'] = $msg;
    return $this->getView('Error404',$data);
  }
}