<?php

include_once '../app/models/UserModel.php';


  function createSession($user_model, $data) {
    $sessionId = bin2hex(random_bytes(20));
    $user_model->saveSession($sessionId, $data);
    return setcookie("sessionId", $sessionId, time()+3600);
  }

  function sessionUserData($sessionId) {
    $user_model = new UserModel();
    $userdata = $user_model->getSession($sessionId);
    return $userdata;
  }