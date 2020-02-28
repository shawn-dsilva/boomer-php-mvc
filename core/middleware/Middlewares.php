<?php

function isAuth($obj) {

    if(!isset($_COOKIE['sessionId']) ) {
      if ($obj->uri == 'dashboard') {
        Header("Location: login");
        exit();
      }
    } else {
      if($obj->uri == 'login' || $obj->uri == 'register') {
        Header("Location: dashboard");
        exit();
      }
    }
}