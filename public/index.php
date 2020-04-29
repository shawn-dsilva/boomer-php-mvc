<?php

require '../core/router/Router.php';
require '../core/utils/utilities.php';
require '../app/config/dbconf.php';


Router::initRouter("../app/routes/RoutesList.php","../core/router/methods.php")->handleRoute(mediate(findURI(), BASEURL_SUBDIR ),findMethod());
