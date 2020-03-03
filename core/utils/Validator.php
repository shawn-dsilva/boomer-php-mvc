<?php

class Validator {

  public $errMsg;

  public function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $this->errMsg = "E-Mail is not valid, Empty fields not allowed";
      return FALSE;
    } else {
      return TRUE;
    }
  }

  public function allowedCharacters($string, $name) {
    if (!preg_match("/^[a-zA-Z0-9-_]+$/", $string)) {
      $this->errMsg = "Invalid {$name}, only Upper and lower case letters, Numbers, - and _ are allowed<br> Empty fields not allowed";
      return FALSE;
    } else {
      return TRUE;
    }
  }

  public function validateAll($data) {

    foreach ( $data as $key => $value ) {
      if($key == 'email') {
        $this->validateEmail($value) ?  TRUE : $this->errMsg;
      } else {
        $this->allowedCharacters($value, $key) ?  TRUE : $this->errMsg;
      }
    }

    if(empty($this->errMsg)) {
      return TRUE;
    } else {
      return FALSE;
    }

  }

  public function getErrMsg() {
    return $this->errMsg;
  }
}