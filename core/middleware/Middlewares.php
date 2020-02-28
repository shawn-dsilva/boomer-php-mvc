<?php

function isAuth($obj) {
    // if (!isset($_COOKIE['sessionId']) && $obj->uri == 'dashboard' ) { // if not logged in
    //     // TODO : Add verification of sessionId with DB step
    //   Header("Location: login");
    //   exit();
    // } else if (!isset($_COOKIE['sessionId']) && $obj->uri == 'register' || $obj->uri == 'login' ) {
    //   Header("Location: dashboard");
    //   exit();
    // }

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