<?php

include('../core/database/Database.php');

class Model extends Database {

    public $query;

    public function __toString()
    {
      return $this->query;
    }

    public function selectAll($table) {

      $this->query = "SELECT * FROM $table";
      return $this;
    }

    public function insertInto($table, $data) {

      $columns = join(', ', array_keys($data));
      $values = ':'.join(', :', array_keys($data));
      $this->query = "INSERT INTO $table ($columns) VALUES ($values)";
      return $this->query;
    }

    public function where($column, $value) {

      $this->query = $this->query." WHERE $column='$value'";
      return $this->query;
    }
}