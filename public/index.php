<?php

require '../core/router/Router.php';
require '../core/utils/utilities.php';



Router::initRouter("../app/controller/RoutesController.php","../core/router/methods.php")->handleRoute(findURI(),findMethod());
