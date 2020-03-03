<?php

include_once('../app/models/UserModel.php');
include_once('../app/controller/SessionsController.php');
include_once('../core/utils/Validator.php');


class AuthController  {

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

    $validator = new Validator();

    if ($validator->validateAll($data)) {

       //Checks if user exists, if it does, then an array will be returned,
       // else it will be empty
       $user = self::$user_model->userExists($data['email']);

       if (!empty($user)) {
       //If not empty, check given password with the stored password in db
           if ($data['password'] == $user['password']) {
             createSession(self::$user_model, $user);
             //Header("Location: dashboard"); // Redirect to dashboard page
             echo('success');
           } else {
               echo('Incorrect Password') ;
           }

       } else {
            echo('User Not Found');
       }

   } else {
      echo($validator->getErrMsg());
    }

  }

  public function register () {
    $data=array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    $validator = new Validator();

      if ($validator->validateAll($data)) {

          $user = self::$user_model->userExists($data['email']);

          if (empty($user)) {
              self::$user_model->addUser($data);
              return getView('Login');
          } else {
              return getView('Error404', 'User With That E-mail Already Exists');
          }

      } else {
        return getView('Error404', $validator->getErrMsg());
      }
  }

  public function logout() {
    $sessionId = $_COOKIE['sessionId'];
    destroySession(self::$user_model, $sessionId);
  }
}