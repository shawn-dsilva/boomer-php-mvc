<?php

require '../config/dbconf.php';

class Database {

  protected $pdo;

  public function __construct()
  {
    try {
        $this->pdo = new PDO(DSN,DB_USER,DB_PASS, OPTS);
       return $this->pdo;
    } catch (PDOException $error) {
        die("Could Not Connect. to Database <br> Error: ".$error."<br> DSN String is : ".DSN);
    }
  }

  public function execstmt($query, $data) {
    try {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } catch (ErrorException $error) {
      die(var_dump("An Error has occured. Error : $error <br> SQL Query : $stmt"));
    }
  }

}