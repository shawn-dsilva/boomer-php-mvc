<?php

require '../core/router/Router.php';
require '../core/utils/helpers.php';



Router::initRouter("../controller/RoutesController.php","../core/router/methods.php")->handleRoute(findURI(),findMethod());
