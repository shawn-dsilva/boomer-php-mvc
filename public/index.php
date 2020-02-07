<?php

require '../router/Router.php';
require '../utils/helpers.php';

Router::initRouter("routes.php","methods.php")->handleRoute(findURI(),findMethod());
