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

        return $this->execstmt($this->query, []);
    }

    // public function passwordCheck($email, $password) {

    //     $this->selectAll('users')->where('email',$email);

    //     $user = $this->execstmt($this->query, []);

    //     return $user['password'] == $password ? true : false ;
    // }
}