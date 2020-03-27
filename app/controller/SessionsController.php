<?php


  function createSession($user_model, $data) {
    $sessionId = bin2hex(random_bytes(20));
    $user_model->saveSession($sessionId, $data);
    return setcookie("sessionId", $sessionId, time()+3600);
  }

  function sessionUserData($sessionId) {
    $user_model = new UserModel;
    $sessiondata = $user_model->getSession($sessionId);
    // TODO : Switch to SQL join instead of below hack
    $userdata = $user_model->userExists('id', $sessiondata['id']);
    return $userdata;
  }

  function destroySession($user_model, $sessionId) {
    $user_model->deleteSession($sessionId);
    return TRUE;
  }