<?php

include_once('../app/models/UserModel.php');


class AuthController  {

  public  static $user_model;

  public function init()
  {
    self::$user_model = new UserModel();
  }

  public function createSession() {
    $sessionId = bin2hex(random_bytes(20));
    self::$user_model->saveSession($sessionId);
    return setcookie("sessionId", $sessionId, time()+3600);
  }

  public function login () {
    $data=array(
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    try {
        //Checks if user exists, if it does, then an array will be returned, else it will be empty
        $user = self::$user_model->userExists($data['email']);

        if (!empty($user)) {
        //If not empty, check given password with the stored password in db
            if ($data['password'] == $user['password']) {
              self::createSession();
              Header("Location: dashboard");
            //  return getView('Dashboard', compact('data'));
            } else {
                return getView('Error404', 'Incorrect Password') ;
            }
      ;
        } else {
            return getView('Error404', 'User Not Found');
        }
    } catch (ErrorException $error) {
      echo $error;
    }

  }

  public function register () {
    $data=array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    try {

      $user = self::$user_model->userExists($data['email']);

      if (empty($user)) {
         $result = self::$user_model->addUser($data);
        return getView('Dashboard', compact('result'));

      } else {
        return getView('Error404', 'User With That E-mail Already Exists');
      }

    } catch(ErrorException $error) {
      echo $error;
    }
  }
}