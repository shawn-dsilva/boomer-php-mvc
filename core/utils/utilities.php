<?php

function findURI(){
  return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
}

function findMethod(){
  return $_SERVER['REQUEST_METHOD'];
}

function view($name, $data = []) {
  return require "../app/views/{$name}View.php";
}
