<?php

include('../utils/Database.php');

class Model extends Database {

    public $query;

    public function selectAll($table) {

      $this->query = "SELECT * FROM $table";
      return $this->query;
    }

    public function insertInto($table, $data) {

      $columns = join(', ', array_keys($data));
      $values = ':'.join(', :', array_keys($data));
      $this->query = "INSERT INTO $table ($columns) VALUES ($values)";
      return $this->query;
    }

    public function where($column, $value) {

      $this->query .= " WHERE $column='$value'";
      return $this->query;
    }
}