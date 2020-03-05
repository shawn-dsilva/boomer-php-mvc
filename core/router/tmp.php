<?php
  // Regex to match {:id} etc "{:[a-z]+}"
    // $regex = "~^/user/([a-zA-Z0-9-_]+)/post/([a-zA-Z0-9-_]+)$~";
    // preg_match($regex, '/user/shawn/post/onepost', $matches);
    // die(var_dump($matches));


    $test = '/user/{:id}/post/{:post}';
    preg_match_all( "/{:[a-z]+}/", $test, $matches, PREG_SET_ORDER, 0);

    $test = preg_replace( "/{:[a-z]+}/","([a-zA-Z0-9-_]+)", $test );
    die(var_dump($test));
