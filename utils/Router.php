<?php

require '../controller/StaticPageController.php';
require '../controller/AuthController.php';
require '../controller/BaseController.php';


class Router
{
  protected $routes = [];
  protected $allowedMethods;

  public static function initRouter($routes,$methods) {

    // keyword static instantiates a new object
    $router = new static;

    //this parameter should contain an array of allowed Methods, methods.php file
    require $methods;

    // allowedMethods from the $methods file added to allowMethods array in class
    $router->allowedMethods = $allowedMethods;

    //includes the routes.php file and runs the registerRoute() functions contained within
    require $routes;

    return $router;
  }


  public function registerRoute($method, $uri, callable $controller) {

    //If method is allowed, store controller in a sub-array $method of $routes
    // with the key as $uri and value as $controller
    if (array_key_exists($method, $this->allowedMethods)) {
        return $this->routes[$method][$uri] = new BaseController($controller);
    } else {
      throw new Exception('Invalid Method');
    }
  }


  public function handleRoute($uri, $methodType) {

    if (array_key_exists($uri, $this->routes[$methodType])) {

      // //extracts only the controller name from the controller+function string
      // $controller = current(explode('::', $this->routes[$methodType][$uri]));

      // // initizalizes the controller
      // call_user_func($controller::init());

      // //calls the given function from the controller
      // return call_user_func( $this->routes[$methodType][$uri]);

      return $this->routes[$methodType][$uri]->runController();

    } else {
    throw new Exception('No route defined for this URI');
    }
  }

}