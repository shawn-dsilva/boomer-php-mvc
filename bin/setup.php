<?php

require 'app/config/dbconf.php';


    try {
        $db = new PDO(DSN,DB_USER,DB_PASS, OPTS);
        $sql = file_get_contents('bin/db.sql');
        die(var_dump($sql));
        //$db->exec()
    } catch (PDOException $error) {
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
