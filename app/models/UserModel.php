<?php

include_once('../app/models/BaseModel.php');

class UserModel extends BaseModel {


    public function getAllUsers() {
        $this->selectAll('users');
        return $this->execstmt($this->query, [])->fetchAll();
    }

    public function addUser($data) {

        $this->insertInto('users', $data);
        $this->execstmt($this->query, $data);
    }

    public function userExists(string $name, $param) { // checks if user exists using a parameter

        $this->selectAll('users')->where($name,$param);

        return $this->execstmt($this->query, [])->fetch();
    }





    public function updateUserData($id, $data) {
        //die(var_dump($data));

        $this->update('users')->set($data)->where('id', $id);
        //die(trigger_error($this->query));
        //die(var_dump($this->query));

        return $this->execstmt($this->query, []);
    }

}