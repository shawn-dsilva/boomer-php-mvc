<?php


class StaticPageController {

  public function init()
  {  }

  public function home () {

    $db = new Database();

    return getView('Home');
  }

  public function dashboard () {
    return getView('Dashboard');
  }

  public function login () {
    return getView('Login');
  }

  public function register () {
    return getView('Register');
  }
}