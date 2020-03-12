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
    }

    public function getPosts($userId) {
        self::$post_model = new PostModel();
        $posts = self::$post_model->getPost($userId);
        return $posts;
    }
}