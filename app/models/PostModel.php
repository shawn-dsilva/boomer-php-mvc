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
}