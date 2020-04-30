<?php

function findURI(){
  return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
}

function findMethod(){
  return $_SERVER['REQUEST_METHOD'];
}

function mediate($uri, $BASEURL_SUBDIR) {
  // die(var_dump(strpos($uri, "boomer-php-mvc/")));
   if(strpos($uri, $BASEURL_SUBDIR) === 0) {
   $uri = str_replace($BASEURL_SUBDIR."/",'',$uri);
   } else if ($uri == $BASEURL_SUBDIR) {
     $uri = "";
   }
//  die(var_dump($uri));
   return $uri;
 }


function view($name, $data = []) {
  return require "../app/views/{$name}View.php";
}
