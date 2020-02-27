<?php

class BaseController {

  public $controller;
  public $middleware = [];

  public function __construct($controller)
  {
    $this->controller = $controller;
    return $this->controller;
  }

  public function middleware(...$middlewares)
  {
    foreach ( $middlewares as $middleware ) {
      $this->middleware[] = $middleware;
    }
  }

  public function runController() {

    //extracts only the controller name from the controller+function string
    $controller = current(explode('::', $this->controller));

    // initizalizes the controller
    call_user_func($controller::init());

    call_user_func($this->controller);
  }
}