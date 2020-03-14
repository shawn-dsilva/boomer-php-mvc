<?php

include_once('../app/models/Model.php');

class PostModel extends Model
{
    public $query;

    public function insertPost($data) {

        $this->query = $this->insertInto('posts', $data);
        $this->execstmt($this->query, $data);
    }

    public function getPost($userId) {

        $this->query = $this->selectAll('posts')->where('user_id', $userId);
        return $this->execstmt($this->query, [])->fetchAll();
    }

    public function deletePost($userId, $id) {

        $this->query = $this->deleteFrom('posts')->where('user_id', $userId)->and('id', $id);
        die(var_dump($this->query));
        return $this->execstmt($this->query, []);
    }
}