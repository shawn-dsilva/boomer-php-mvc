<?php
include_once('../core/sessions/SessionModel.php');


  function createSession($user_model, $data) {
    $sessionId = bin2hex(random_bytes(20));
    $user_model->saveSession($sessionId, $data);
    return setcookie("sessionId", $sessionId, time()+3600);
  }

  function sessionUserData($sessionId) {
    $session_model = new SessionModel;
    $userdata = $session_model->getSession($sessionId);
    return $userdata;
  }

  function destroySession($user_model, $sessionId) {
    $user_model->deleteSession($sessionId);
    return TRUE;
  }