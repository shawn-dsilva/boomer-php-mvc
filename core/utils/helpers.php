<?php

function findURI(){
  return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
}

function findMethod(){
  return $_SERVER['REQUEST_METHOD'];
}

function getView($name, $data = []) {
  extract($data);

  return require "../app/views/{$name}View.php";
}
