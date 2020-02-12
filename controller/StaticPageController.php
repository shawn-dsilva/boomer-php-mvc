<?php


class StaticPageController {

  public function home () {
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