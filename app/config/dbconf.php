<?php

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'phpmyadmin');
define('DB_PASS', '123456');
define('DB_NAME', 'boomermvc');
define('DSN', 'mysql:host='.DB_HOST.';dbname='.DB_NAME);
define('OPTS', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);