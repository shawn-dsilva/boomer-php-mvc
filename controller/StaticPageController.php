<?php


class StaticPageController {

  public function home () {
    return getView('Home');
  }

  public function dashboard () {
    return getView('Dashboard');
  }

}