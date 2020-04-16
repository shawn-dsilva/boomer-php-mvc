<?php

include_once('../app/models/UserModel.php');
include_once('../core/sessions/SessionsController.php');
include_once('../core/sessions/SessionModel.php');

include_once('../core/utils/Validator.php');
include_once('../app/controller/BaseController.php');


class AuthController extends BaseController {

  public $user_model;
  // public static $mwReturns = [];
  public function __construct($mwReturns,$params)
  {
    parent::__construct($mwReturns, $params);
    $this->user_model = new UserModel();
    $this->session_model = new SessionModel();

  }

  public function getUser() {
    $userdata['user'] = $this->user_model->userExists('username', $this->params['username']);
    $error['msg'] = 'User Not Found';
    empty($userdata['user']) ? self::getView('Error404', $error): self::getView('UserProfile', $userdata) ;
  }

  public function getUsersList() {
    $userlist = $this->user_model->getAllUsers();
    // die(var_dump($userlist));
    foreach($userlist as $index => $user) {
      // Changes date to human readable form per comment item in array
      $user['registered_on'] = date('l, F jS, Y ', strtotime($user['registered_on']));
      // adds updated comment item back to main array
      $userlist[$index] = $user;
  }
    // self::getView('UsersList', $userlist);
    self::getView('UsersList', $userlist);
  }

  public function getProfile() {
    $data['user_data'] = sessionUserData($_COOKIE['sessionId']);

    // TODO : FIX isAuth Middleware to reject non-logged in users from accessing profile, and remove if else block from here
    if(empty($data)) {
      Header("Location: login");
    } else {
      unset($data['user_data']['password']);
      self::getView('SelfProfile',$data);
    }

  }

  public function editProfile() {
    $data = $_POST;
    $id = sessionUserData($_COOKIE['sessionId'])['id'];
    // TODO : FIX isAuth Middleware to reject non-logged in users from accessing profile, and remove if else block from here

    foreach($data as $key => $value) {
     if(empty($value)) {
       unset($data[$key]);
     }
    }
    //die(var_dump($data,$id));
    $this->user_model->updateUserData($id,$data);
    echo 'success';

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
       $user = $this->user_model->userExists('email', $data['email']);

       if (!empty($user)) {
       //If not empty, check given password with the stored password in db
           if ($data['password'] == $user['password']) {
             createSession($this->session_model, $user);
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
      'username' => $_POST['username'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
    );

    $validator = new Validator();

      if ($validator->validateAll($data)) {

          $user = $this->user_model->userExists('email', $data['email']);

          if (empty($user)) {
            $username = $this->user_model->userExists('username', $data['username']);
            if(!empty($username)) {
              echo('sorry, that username is already taken');
            } else {
                $this->user_model->addUser($data);
                echo('success');
            }
          } else {
              echo('User With That E-mail Already Exists');
          }

      } else {
        echo($validator->getErrMsg());
      }
  }

  public function logout() {
    $sessionId = $_COOKIE['sessionId'];
    destroySession($this->user_model, $sessionId);
  }
}