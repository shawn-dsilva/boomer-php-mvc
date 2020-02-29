<?php

function findURI(){
  return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
}

function findMethod(){
  return $_SERVER['REQUEST_METHOD'];
}

function getView($name, $data = []) {
  return require "../app/views/{$name}View.php";
}

function validateEmail($email) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "E-Mail is not valid";
  } else {
    return $email;
  }
}

function allowedCharacters($string, $name) {
  if (!preg_match("/^[a-zA-Z0-9-_]+$/", $string)) {
    return "Invalid {$name}, only Upper and lower case letters, Numbers, - and _ are allowed";
  } else {
    return $string;
  }
}