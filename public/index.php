<?php

require '../utils/Router.php';
require '../utils/helpers.php';

Router::initRouter("../controller/RoutesController.php","../utils/methods.php")->handleRoute(findURI(),findMethod());
