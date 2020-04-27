<?php

require '../core/router/Router.php';
require '../core/utils/utilities.php';

function purify($uri) {
  // die(var_dump(findURI()));
  if(strpos($uri, "boomer-php-mvc/") === 0) {
  $uri = str_replace('boomer-php-mvc/','',$uri);
  }
    // die(var_dump($uri));
  return $uri;
}

Router::initRouter("../app/routes/RoutesList.php","../core/router/methods.php")->handleRoute(purify(findURI()),findMethod());
