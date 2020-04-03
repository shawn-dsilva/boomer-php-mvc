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
        $userId = $data['user_data']['id'];
        // if($params['user_id'] == $userId) {
        $data['post'] = self::$post_model->getSinglePost($userId, $params['postid']);
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
          'comment' => $_POST['comment'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"],
          'post_id' => $_POST['post_id']
        );
        self::$post_model->insertComment($data);
        echo('success');
    }
}