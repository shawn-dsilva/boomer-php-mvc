<?php

function isAuth($obj) {
    if (!isset($_COOKIE['sessionId']) && $obj->uri == 'dashboard') {
        // TODO : Add verification of sessionId with DB step
      Header("Location: login");
      exit();
    }
}