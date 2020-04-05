<?php

include_once('../app/models/PostModel.php');
include_once('../app/controller/SessionsController.php');
include_once('../core/utils/Validator.php');
include_once('../app/models/UserModel.php');


class PostController
{
    public static $post_model;

    public function init()
    {
        self::$post_model = new PostModel();
    }

    public function addPost () {

        $data=array(
          'title' => $_POST['title'],
          'content' => $_POST['content'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"]
        );
        self::$post_model->insertPost($data);
        echo('success');
    }

    public function getPosts() {
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $posts = self::$post_model->getPost($userId);
        echo(json_encode($posts));
    }

    public function getOnePost($params) {

        $data['user_data'] = sessionUserData($_COOKIE['sessionId']);
        // if($params['user_id'] == $userId) {
        $data['post'] = self::$post_model->getSinglePost($params['postid']);
        $data['post']['created_at'] = date('l, F jS, Y \a\t\ g:i A', strtotime($data['post']['created_at']));
        // echo(json_encode($post));
        return getView('SinglePost', $data);
        // } else echo 'Error : Access Denied';

    }

    public function removePost() {
        $id = $_POST['id'];
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        self::$post_model->deletePost($userId, $id);
        echo('success');
    }

    public function getEditPostForm($params) {
        $data['user_data'] = sessionUserData($_COOKIE['sessionId']);
        if(!$data['user_data']) {
            $data['errcode'] = 401;
            $data['msg'] = 'You have to be Logged In to do that.<br><a href="/login"> Login Here</a>';
            return getView('Error404',$data );
        }
        // if($params['user_id'] == $userId) {
        $data['post'] = self::$post_model->getSinglePost($params['postid']);
        if($data['post']['user_id'] == $data['user_data']['id']) {
            return getView('EditPost', $data);
        } else {
            $data['errcode'] = 403;
            $data['msg'] = 'You Can only Edit your own Posts,<br><a href="/postlist"> View All Your Blog Posts</a>';
            return getView('Error404',$data );
        }

    }

    public function editPost () {

        $data=array(
          'id' => $_POST['post_id'],
          'title' => $_POST['title'],
          'content' => $_POST['content'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"]
        );
        self::$post_model->updatePost($data);
        echo('success');
    }

    public function addComment () {

        $data=array(
          'content' => $_POST['content'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"],
          'post_id' => $_POST['post_id']
        );
        self::$post_model->insertComment($data);
        echo('success');
    }

    public function getComments($params) {
        $postId = $params['postid'];
        $comments = self::$post_model->getComments($postId);

        foreach($comments as $index => $comment) {
            // Changes date to human readable form per comment item in array
            $comment['created_at'] = date('l, F jS, Y \a\t\ g:i A', strtotime($comment['created_at']));
            // adds updated comment item back to main array
            $comments[$index] = $comment;
        }

        echo(json_encode($comments));
    }
}