<?php

include_once('../app/models/Model.php');

class UserModel extends Model {

    public $query;

    public function addUser($data) {

    $this->query = $this->insertInto('users', $data);
    $this->execstmt($this->query, $data);
    }

    public function userExists($email) {

        $this->selectAll('users')->where('email',$email);

        return $this->execstmt($this->query, [])->fetch();
    }

    public function saveSession($sessionId) {
        $sessionId = array("sessionId" => $sessionId);
        $this->query = $this->insertInto('sessions', $sessionId);
        $this->execstmt($this->query, $sessionId);
    }


}