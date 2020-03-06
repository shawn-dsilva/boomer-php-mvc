<?php

class BaseController {

  public $controller;
  public $uri;
  public $method;
  public $middleware = [];
  public $paramk = [];
  public $params = [];

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

  public function getParamKeys() {
    return $this->paramk;
  }

  public function getParams() {
    return $this->params;
  }

  public function getUri() {
    return $this->uri;
  }

  public function makeParams($paramKeys, $paramVals) {
    $this->params = array_combine($paramKeys, $paramVals);
  }

  public function runController() {

    //extracts only the controller name from the controller+function string
    $controller = current(explode('::', $this->controller));

    // initizalizes the controller
    call_user_func($controller::init());

    call_user_func($this->controller, $this->params);
  }

  public function runMiddlewares() {
    foreach( $this->middleware as $middleware) {
      call_user_func($middleware, $this);
    }
  }

}