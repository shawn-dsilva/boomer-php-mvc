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

    public function getPosts() {
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $posts = self::$post_model->getPost($userId);
        echo(json_encode($posts));
    }

    public function removePost() {
        $id = $_GET['id'];
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $posts = self::$post_model->deletePost($userId, $id);
        echo(json_encode($posts));
    }
}