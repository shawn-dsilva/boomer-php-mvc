<?php

require '../config/dbconf.php';

class Database {

  public function __construct()
  {
    try {
       return new PDO(DSN,DB_USER,DB_PASS);
    } catch (PDOException $error) {
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
  }

}