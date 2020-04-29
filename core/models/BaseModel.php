<?php

include('../core/database/Database.php');
include('../core/database/QueryBuilder.php');

class BaseModel  {

  public $query;
  public $db;

  public function __construct() {
    $this->query = new QueryBuilder();
    $this->db = new Database();
  }

}