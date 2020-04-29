<?php

include_once('../core/models/BaseModel.php');

class PostModel extends BaseModel
{
    public function insertPost($data)
    {
        $this->query->insertInto('posts', $data);
        $this->db->execstmt($this->query, $data);
    }

    public function getAllPosts()
    {
        // $this->selectAll('posts');
        $userdata = ['users.username','name','users.id','posts.user_id','posts.id','title','content','created_at'];
        $this->query->select($userdata)->from('users')->join('posts')->on('users.id','posts.user_id');
        return $this->db->execstmt($this->query, [])->fetchAll();
    }

    public function getPost($userId)
    {
        $this->query->selectAll('posts')->where('user_id', $userId);
        return $this->db->execstmt($this->query, [])->fetchAll();
    }

    public function getSinglePost($postId)
    {
        // $this->selectAll('posts')->where('user_id', $userId)->and('id', $postId);

        $userdata = ['users.username','name','users.id','posts.user_id','posts.id','title','content','created_at'];
        $this->query->select($userdata)->from('users')->join('posts')->on('users.id','posts.user_id')->where('posts.id', $postId);
        return $this->db->execstmt($this->query, [])->fetch();
    }

    public function updatePost($data)
    {
        $post['title'] = $data['title'];
        $post['content'] = $data['content'];

        $this->query->update('posts')->set($post)->where('user_id', $data['user_id'])->and('id', $data['id']);
        //die(trigger_error($this->query));
        return $this->db->execstmt($this->query, []);
    }

    public function deletePost($userId, $id)
    {
        $this->query->deleteFrom('posts')->where('user_id', $userId)->and('id', $id);
        return $this->db->execstmt($this->query, []);
    }

    public function insertComment($data)
    {
        $this->query->insertInto('comments', $data);
        $this->db->execstmt($this->query, $data);
    }

    public function getComments($postId)
    {
        // $this->selectAll('comments')->where('post_id', $postId);
        $userdata = ['comments.user_id','comments.id','users.username','name','content','created_at'];
        $this->query->select($userdata)->from('users')->join('comments')->on('users.id','comments.user_id')->where('post_id', $postId);
        // die(trigger_error($this->query));
        //die(var_dump($this->db->execstmt($this->query, [])->fetch()));
        return $this->db->execstmt($this->query, [])->fetchAll();

    }


    public function getSingleComment($commentId)
    {
        // $this->selectAll('posts')->where('user_id', $userId)->and('id', $postId);

        $this->query->selectAll('comments')->where('comments.id', $commentId);
        return $this->db->execstmt($this->query, [])->fetch();
    }

    public function deleteComment($commentId)
    {
        $this->query->deleteFrom('comments')->where('id', $commentId);
        return $this->db->execstmt($this->query, []);
    }

    public function updateComment($data)
    {
        $comment['id'] = $data['comment_id'];
        $comment['content'] = $data['content'];

        $this->query->update('comments')->set($comment)->where('id', $comment['id']);
        //die(trigger_error($this->query));
        return $this->db->execstmt($this->query, []);
    }
}