<?php

function isAuth($obj) {

    if(!isset($_COOKIE['sessionId']) ) {

      if ($obj->uri == 'dashboard' || $obj->uri == 'profile') {
         Header("Location: login");
        exit();

      }

      return false;

    } else {

      if($obj->uri == 'login' || $obj->uri == 'register') {
        Header("Location: dashboard");
        exit();
      }

      return true;

    }

}