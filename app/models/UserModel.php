<?php

include_once('../core/models/BaseModel.php');

class UserModel extends BaseModel {


    public function getAllUsers() {
        $this->query->selectAll('users');
        return $this->db->execstmt($this->query, [])->fetchAll();
    }

    public function addUser($data) {

        $this->query->insertInto('users', $data);
        $this->db->execstmt($this->query, $data);
    }

    public function userExists(string $name, $param) { // checks if user exists using a parameter

        $this->query->selectAll('users')->where($name,$param);

        return $this->db->execstmt($this->query, [])->fetch();
    }





    public function updateUserData($id, $data) {
        //die(var_dump($data));

        $this->query->update('users')->set($data)->where('id', $id);
        //die(trigger_error($this->query));
        //die(var_dump($this->query));

        return $this->db->execstmt($this->query, []);
    }

}