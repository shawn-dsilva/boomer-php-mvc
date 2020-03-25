<?php

require 'app/config/dbconf.php';


    try {
        $db = new PDO('mysql:host='.DB_HOST,DB_USER,DB_PASS, OPTS);
        //$sql = file_get_contents('bin/db.sql');
        $DB_NAME = constant('DB_NAME');

        $sql = "DROP DATABASE IF EXISTS ${DB_NAME};

        CREATE DATABASE IF NOT EXISTS ${DB_NAME};

        USE ${DB_NAME};";

        $sql .= file_get_contents('bin/db.sql');

        //die(var_dump($sql));
        $db->exec($sql);
        echo 'Database provisioned successfully';
    } catch (PDOException $error) {
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
