<?php

require '../app/controller/StaticPageController.php';
require '../app/controller/AuthController.php';
require '../app/controller/BaseController.php';
// require './middleware/Middlewares.php';
include(dirname(__FILE__)."/../middleware/Middlewares.php");


class Router
{
  protected $routes = [];
  protected $allowedMethods;
  public $paramKeys = [];
  public $url;

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

      if(preg_match_all( "{:([a-z]+)}", $uri, $matches)){

      $this->paramKeys = $matches[1];

       $uri = preg_replace( "/{:[a-z]+}/","([a-zA-Z0-9-_]+)", $uri );
       $this->url = "~^".$uri."$~";

      } else {
        $this->url = $uri;
      }

      return $this->routes[$method][$this->url] = new BaseController($controller, $method, $this->url, $this->paramKeys);

    } else {
      throw new Exception('Invalid Method');
    }
  }


  public function handleRoute($uri, $methodType) {

    // if(file_exists($uri)) {
    //   readfile($uri);
    //   exit;
    // }

    // Regex to match {:id} etc "{:[a-z]+}"
    // $regex = "~^/user/([a-zA-Z0-9-_]+)/post/([a-zA-Z0-9-_]+)$~";
    // preg_match($regex, '/user/shawn/post/onepost', $matches);
    // die(var_dump($matches));


    //   $test = '/user/{:id}/post/{:post}';
    // preg_match_all( "/{:[a-z]+}/", $test, $matches, PREG_SET_ORDER, 0);

    // // $test = preg_replace( "/{:[a-z]+}/","([a-zA-Z0-9-_]+)", $test );

    // $proute = $this->routes['GET']['~^users/([a-zA-Z0-9-_]+)/posts/([a-zA-Z0-9-_]+)$~'];
    // $purl = 'users/{:name}/posts/{:post}';
    //  die(var_dump($proute->getParams()));

    // $test = preg_replace( "/{:[a-z]+}/","([a-zA-Z0-9-_]+)", $purl );
    // $test = "~^".$test."$~";
    // //die(var_dump($test));

    // //$test = "~^user/([a-zA-Z0-9-_]+)/post/([a-zA-Z0-9-_]+)$~";
    // preg_match($test, 'users/shawn/posts/onepost', $matches);
    // die(var_dump($uri));
    foreach ($this->routes[$methodType] as $route) {

      if(preg_match_all($route->getUri() , $uri, $matches)) {
        die(var_dump($matches));
      }
    }

    if (array_key_exists($uri, $this->routes[$methodType])) {

      $this->routes[$methodType][$uri]->runMiddlewares();

      return $this->routes[$methodType][$uri]->runController();

    } else {
    // throw new Exception('No route defined for this URI');
    return getView('Error404', 'No Route defined for this URI');
    }
  }

}