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

        $sql = file_get_contents('bin/db.sql');

        //die(var_dump($sql));
        $db->exec($sql);
        echo 'Database provisioned successfully';
    } catch (PDOException $error) {
        die($error->getMessage());
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
