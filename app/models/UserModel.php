<?php

include_once('../app/models/BaseModel.php');

class UserModel extends BaseModel {


    public function addUser($data) {

    $this->insertInto('users', $data);
    $this->execstmt($this->query, $data);
    }

    public function userExists(string $name, $param) { // checks if user exists using a parameter

        $this->selectAll('users')->where($name,$param);

        return $this->execstmt($this->query, [])->fetch();
    }



    public function saveSession($sessionId, $data) {

        unset($data['password']);
        unset($data['name']);
        unset($data['about']);
        unset($data['location']);

        $data["sessionId"] = $sessionId;
        // die(var_dump($data));
        $this->insertInto('sessions', $data);
        $this->execstmt($this->query, $data);
    }

    public function getSession($sessionId) {
        $this->selectAll('sessions')->where('sessionId', $sessionId);
        return $this->execstmt($this->query, [])->fetch();
    }

    public function deleteSession($sessionId) {
        $this->deleteFrom('sessions')->where('sessionId', $sessionId);
        return $this->execstmt($this->query, []);
    }
}