<?php

include_once('../core/controller/BaseController.php');

class ResourceController extends BaseController
{
    public function css()
    {
        header("Content-Type:text/css; charset: UTF-8");
        return require "../public/css/main.css";
    }

    public function js()
    {
        header("Content-Type: text/javascript; charset: UTF-8");
        return require "../public/js/main.js";
    }
}