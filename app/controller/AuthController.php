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

    try {
        //Checks if user exists, if it does, then an array will be returned, else it will be empty
        $user = self::$user_model->userExists($data['email']);

        if (!empty($user)) {
        //If not empty, check given password with the stored password in db
            if ($data['password'] == $user['password']) {
              createSession(self::$user_model, $user);
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

    $validator = new Validator();

      if ($validator->validateAll($data)) {

          $user = self::$user_model->userExists($data['email']);

          if (empty($user)) {
              $result = self::$user_model->addUser($data);
              return getView('Dashboard', compact('result'));
          } else {
              return getView('Error404', 'User With That E-mail Already Exists');
          }

      } else {
        return getView('Error404', $validator->getErrMsg());
      }
  }
}