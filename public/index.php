<?php

require '../models/Model.php';
require '../utils/Router.php';
require '../utils/helpers.php';

Router::initRouter("../controller/RoutesController.php","../utils/methods.php")->handleRoute(findURI(),findMethod());

$data=array(
  'name' => 'abc',
  'email' => 'abc@xyz.com',
  'password' => '123456'
);

$model = new Model();


echo ($model->insertInto('user', $data));