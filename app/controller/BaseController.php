<?php

class BaseController {

  // public $controller;
  // public $uri;
  // public $method;
  // public $middleware = [];
  public $mwReturns = [];
  public static $middlewareReturns = [];
  // public $paramk = [];
  public $params = [];

  public function __construct($mwReturns,$params = [])
  {
    $this->params = $params;
    $this->mwReturns = $mwReturns;
    // $this->controller = $controller;
    // return $this->controller;
  }


  // public function getParamKeys() {
  //   return $this->paramk;
  // }

  // public function getParams() {
  //   return $this->params;
  // }

  // public function getUri() {
  //   return $this->uri;
  // }

  // public function makeParams($paramKeys, $paramVals) {
  //   $this->params = array_combine($paramKeys, $paramVals);
  // }

  // public function middleware(...$middlewares) // constructs array of middlewares
  // {
  //   foreach ( $middlewares as $middleware ) {
  //     $this->middleware[] = $middleware;
  //   }
  // }

  // public function runController() {

  //   //extracts only the controller name from the controller+function string
  //   $controller = current(explode('::', $this->controller));

  //   // initizalizes the controller
  //   call_user_func($controller::init($this->mwReturns));

  //   call_user_func($this->controller, $this->params); // passes in parameters to the controller
  // }

  // public function runMiddlewares() {
  //   foreach( $this->middleware as $middleware) {
  //   $this->mwReturns[$middleware] = call_user_func($middleware, $this);
  //   self::$middlewareReturns[$middleware] = call_user_func($middleware, $this);

  //   }
  // }

  public function getView($viewName, $data = null) {
    $data['user_data'] = self::$middlewareReturns['isAuth']['user_data'];
    view($viewName, $data);

  }

}