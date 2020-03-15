<?php

include_once('../app/models/BaseModel.php');

class PostModel extends BaseModel
{

    public function insertPost($data) {

        $this->insertInto('posts', $data);
        $this->execstmt($this->query, $data);
    }

    public function getPost($userId) {

        $this->selectAll('posts')->where('user_id', $userId);
        return $this->execstmt($this->query, [])->fetchAll();
    }

    public function getSinglePost($userId, $postId) {

        $this->selectAll('posts')->where('user_id', $userId)->and('id', $postId);
        return $this->execstmt($this->query, [])->fetch();
    }

    public function deletePost($userId, $id) {

        $this->deleteFrom('posts')->where('user_id', $userId)->and('id', $id);
        return $this->execstmt($this->query, []);
    }
}