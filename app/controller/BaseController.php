<?php

class BaseController {

  public $controller;
  public $uri;
  public $method;
  public $middleware = [];
  public $paramk = [];

  public function __construct($controller, $method, $uri, $paramk = [])
  {
    $this->controller = $controller;
    $this->uri = $uri;
    $this->method = $method;
    $this->paramk = $paramk;

    return $this->controller;
  }

  public function middleware(...$middlewares)
  {
    foreach ( $middlewares as $middleware ) {
      $this->middleware[] = $middleware;
    }
  }

  public function getParams() {
    return $this->paramk;
  }

  public function getUri() {
    return $this->uri;
  }

  public function runController() {

    //extracts only the controller name from the controller+function string
    $controller = current(explode('::', $this->controller));

    // initizalizes the controller
    call_user_func($controller::init());

    call_user_func($this->controller);
  }

  public function runMiddlewares() {
    foreach( $this->middleware as $middleware) {
      call_user_func($middleware, $this);
    }
  }

}