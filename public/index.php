<?php

require '../core/router/Router.php';
require '../core/utils/utilities.php';



Router::initRouter("../app/routes/RoutesList.php","../core/router/methods.php")->handleRoute(findURI(),findMethod());
