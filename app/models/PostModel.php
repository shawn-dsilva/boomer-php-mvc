<?php

include_once('../app/models/Model.php');

class PostModel extends Model
{

    public function insertPost($data) {

        $this->insertInto('posts', $data);
        $this->execstmt($this->query, $data);
    }

    public function getPost($userId) {

        $this->selectAll('posts')->where('user_id', $userId);
        return $this->execstmt($this->query, [])->fetchAll();
    }

    public function deletePost($userId, $id) {

        $this->deleteFrom('posts')->where('user_id', $userId)->and('id', $id);
        return $this->execstmt($this->query, []);
    }
}