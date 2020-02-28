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

    public function saveSession($sessionId, $data) {

        unset($data['password']);
        $data["sessionId"] = $sessionId;
        // die(var_dump($data));
        $this->query = $this->insertInto('sessions', $data);
        $this->execstmt($this->query, $data);
    }

    public function getSession($sessionId) {
        $this->query = $this->selectAll('sessions')->where('sessionId', $sessionId);
        return $this->execstmt($this->query, [])->fetch();
    }

}