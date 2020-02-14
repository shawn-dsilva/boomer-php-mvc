<?php

require_once __DIR__.'/../utils/Database.php';

class Model extends Database {

    public $query;

    public function insertInto($table, $data) {

      $columns = join(', ', array_keys($data));
      $values = ':'.join(', :', array_keys($data));
      $this->query = "INSET INTO $table ($columns) VALUES ($values)";
      return $this->query;
    }
}