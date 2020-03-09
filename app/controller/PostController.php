<?php

include_once('../app/models/PostModel.php');
include_once('../app/controller/SessionsController.php');
include_once('../core/utils/Validator.php');


class PostController
{
    public static $post_model;

    public function init()
    {
        self::$post_model = new PostModel();
    }
}