<?php

include_once '../models/UserModel.php';

class AuthController {

  public function login () {
    $data=array(
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    return getView('Dashboard', compact('data'));

  }

  public function register () {
    $data=array(
      'username' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    try {
        $user_model = new UserModel();
        $user_model->addUser($data);

        return getView('Dashboard', compact('data'));
    } catch(ErrorException $error) {
      echo $error;
    }
  }
}