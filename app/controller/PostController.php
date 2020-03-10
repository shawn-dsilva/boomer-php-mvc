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
          'content' => $_POST['content']
        );

        $user_model = new UserModel;
        $userdata = sessionUserData($user_model, $_COOKIE['sessionId']);

        $data['user_id'] = $userdata['id'];

        // exit(var_dump($data));

        self::$post_model->insertPost($data);
    }
}