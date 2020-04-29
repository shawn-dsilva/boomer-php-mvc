<?php

class BaseController {

  public $mwReturns = [];
  public $params = [];

  public function __construct($mwReturns,$params = [])
  {
    $this->params = $params;
    $this->mwReturns = $mwReturns;
  }


  public function getView($viewName, $data = null) {
    $data['user_data'] = $this->mwReturns['isAuth']['user_data'];
    view($viewName, $data);

  }

}