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

    public function updatePost($data) {

        $post['title'] = $data['title'];
        $post['content'] = $data['content'];

        $this->update('posts')->set($post)->where('user_id', $data['user_id'])->and('id', $data['id']);
        trigger_error($this->query);
        //return $this->execstmt($this->query, [])->fetch();
    }

    public function deletePost($userId, $id) {

        $this->deleteFrom('posts')->where('user_id', $userId)->and('id', $id);
        return $this->execstmt($this->query, []);
    }
}