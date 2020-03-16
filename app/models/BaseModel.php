<?php

include('../core/database/Database.php');

class BaseModel extends Database {

    public $query;

    public function __toString()
    {
      return $this->query;
    }

    public function selectAll($table) {

      $this->query = "SELECT * FROM $table";
      return $this;
    }

    public function update($table) {

      $this->query = "UPDATE $table";
      return $this;
    }

    public function set($data) {
      // TODO
      $this->query .= " SET ";
      foreach($data as $key => $value) {
        reset($array);
        if ($key != key($data)) {
            $this->query .= "{$key}='{$value}', ";
        }
        end($array);
        if ($key != key($data)) {
          $this->query .= "{$key}='{$value}' ";
      }
      }
      return $this;
    }

    public function deleteFrom($table) {

      $this->query = "DELETE FROM $table";
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
      return $this;
    }

    public function and($column, $value) {

      $this->query = $this->query." AND $column='$value'";
      return $this;
    }
}