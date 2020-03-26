<?php

function isAuth($obj) {

    if(!isset($_COOKIE['sessionId']) ) {
      return false;

      // if ($obj->uri == 'dashboard') {
      //   //  Header("Location: login");
      //   // exit();

      // }
    } else {
      return true;

      // if($obj->uri == 'login' || $obj->uri == 'register') {
      //   // Header("Location: dashboard");

      //   // exit();
      // }
    }

}