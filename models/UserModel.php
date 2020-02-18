<?php

include_once('../models/Model.php');

class UserModel extends Model {

    public $query;

    public function addUser($data) {

    $this->query = $this->insertInto('users', $data);
    $this->execstmt($this->query, $data);
    }

    public function userExists($email) {
    $this->selectAll('users')->where('email',$email);
    // die(var_dump($this->query));
    return !empty($this->execstmt($this->query, []));
    }
}