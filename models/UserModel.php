<?php

include_once('../models/Model.php');

class UserModel extends Model {

    public $query;

    public function addUser($data) {

    $query = $this->insertInto('user', $data);
    $this->execstmt($query, $data);
    }
}