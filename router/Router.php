<?php

require '../controller/StaticPageController.php';
require '../controller/AuthController.php';


class Router
{
  protected $routes = [];
  protected $allowedMethods;

  public static function initRouter($routes,$methods) {

    $router = new static; // keyword static instantiates a new object

    require $methods; //this parameter should contain an array of allowed Methods, methods.php file

    $router->allowedMethods = $allowedMethods; // allowedMethods from the $methods file added to allowMethods array in class

    require $routes; //includes the routes.php file and runs the registerRoute() functions contained within

    return $router;
  }


  public function registerRoute($method, $uri, callable $controller) {

    if (array_key_exists($method, $this->allowedMethods)) {
        $this->routes[$method][$uri] = $controller;
    } else {
      throw new Exception('Ivalid Method');
    }
  }

  public function handleRoute($uri, $methodType) {

    if (array_key_exists($uri, $this->routes[$methodType])) {
      return call_user_func( $this->routes[$methodType][$uri]);
    } else {
    throw new Exception('No route defined for this URI');
    }
  }

}