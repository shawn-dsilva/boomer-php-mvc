<?php

  function createSession($user_model, $data) {
    $sessionId = bin2hex(random_bytes(20));
    $user_model->saveSession($sessionId, $data);
    return setcookie("sessionId", $sessionId, time()+3600);
  }

  function sessionUserData($user_model, $sessionId) {
    $userdata = $user_model->getSession($sessionId);
    return $userdata;
  }

  function destroySession($user_model, $sessionId) {
    $user_model->deleteSession($sessionId);
    return TRUE;
  }