<?php

require '../core/router/Router.php';
require '../core/utils/utilities.php';

function purify($uri) {
<<<<<<< HEAD
 // die(var_dump(strpos($uri, "boomer-php-mvc/")));
  if(strpos($uri, "boomer-php-mvc/") === 0) {
  $uri = str_replace('boomer-php-mvc/','',$uri);
  } else if ($uri == "boomer-php-mvc") {
  	$uri = "";
  }
// die(var_dump($uri));
=======
  // die(var_dump(findURI()));
  if(strpos($uri, "boomer-php-mvc/") === 0) {
  $uri = str_replace('boomer-php-mvc/','',$uri);
  }
    // die(var_dump($uri));
>>>>>>> 5f7955a068209f41c8661ebb872cf8cdb4d03291
  return $uri;
}

Router::initRouter("../app/routes/RoutesList.php","../core/router/methods.php")->handleRoute(purify(findURI()),findMethod());
