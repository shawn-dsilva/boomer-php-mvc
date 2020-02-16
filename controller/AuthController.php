<?php

include_once '../models/UserModel.php';

class AuthController extends UserModel {

  public  static $user_model;

  public function init()
  {
    self::$user_model = new UserModel();
  }

  public function login () {
    $data=array(
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    if (self::$user_model->userExists($data['email'])) {
      return getView('Dashboard', compact('data'));
    } else {
      return getView('Error404');
    }

  }

  public function register () {
    $data=array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    try {
        self::$user_model->addUser($data);

        return getView('Dashboard', compact('data'));
    } catch(ErrorException $error) {
      echo $error;
    }
  }
}