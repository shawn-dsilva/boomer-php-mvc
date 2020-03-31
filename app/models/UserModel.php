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
        // $this->selectAll('sessions')->where('sessionId', $sessionId);
        $userdata = ['users.email','users.username','name','about','location'];
        $this->select($userdata)->from('users')->join('sessions')->on('id','users','sessions')->where('sessionId',$sessionId);
        //die(var_dump($this->query));
        //die(var_dump( $this->execstmt($this->query, [])->fetch()));
        return $this->execstmt($this->query, [])->fetch();
    }

    public function deleteSession($sessionId) {
        $this->deleteFrom('sessions')->where('sessionId', $sessionId);
        return $this->execstmt($this->query, []);
    }

    public function updateUserData($id, $data) {
        //die(var_dump($data));

        $this->update('users')->set($data)->where('id', $id);
        //die(trigger_error($this->query));
        //die(var_dump($this->query));

        return $this->execstmt($this->query, []);
    }

}