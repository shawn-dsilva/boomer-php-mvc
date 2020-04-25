<?php

define('DB_HOST', 'mysql');
define('DB_USER', 'phpmyadmin');
define('DB_PASS', '123456');
define('DB_NAME', 'boomerphpmvc');
define('DSN', 'mysql:host='.DB_HOST.';dbname='.DB_NAME);
define('OPTS', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);


    try {
        $db = new PDO(DSN,DB_USER,DB_PASS, OPTS);
        //$sql = file_get_contents('bin/db.sql');
        // $DB_NAME = constant('DB_NAME');

        // $sql = "DROP DATABASE IF EXISTS ${DB_NAME};

        // CREATE DATABASE IF NOT EXISTS ${DB_NAME};

        // USE ${DB_NAME};";

        $sql ="
        DROP TABLE IF EXISTS `users`;
        
        CREATE TABLE `users` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
          `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
          `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
          `name` varchar(100) COLLATE utf8_unicode_ci ,
          `about` varchar(1200) COLLATE utf8_unicode_ci ,
          `location` varchar(100) COLLATE utf8_unicode_ci,
          `registered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
        
        DROP TABLE IF EXISTS `posts`;
        
        CREATE TABLE `posts` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `user_id` int(11) unsigned NOT NULL,
          `title` varchar(100) NOT NULL,
          `content` varchar(600) NOT NULL,
          `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
        DROP TABLE IF EXISTS `sessions`;
        
        CREATE TABLE `sessions` (
          `id` int(11) unsigned NOT NULL,
          `sessionId` varchar(255) NOT NULL,
          `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`sessionId`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
        DROP TABLE IF EXISTS `comments`;
        
        CREATE TABLE `comments` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `post_id` int(11) unsigned NOT NULL,
          `user_id` int(11) unsigned NOT NULL,
          `content` varchar(500) NOT NULL,
          `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        //die(var_dump($sql));
        $db->exec($sql);
        echo 'Database provisioned successfully';
    } catch (PDOException $error) {
        die($error->getMessage());
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
