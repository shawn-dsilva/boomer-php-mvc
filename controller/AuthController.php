<?php

class AuthController {

  public function login () {
    $data=array(
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    return getView('Dashboard', compact('data'));

  }
}