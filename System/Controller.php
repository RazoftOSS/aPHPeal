<?php

include 'DB.php';

class Controller {

  protected $db;

  public function __construct(){
    $this->db = new DB();
  }

  protected function model( $model ){
    require '../App/models/' . ucwords($model) . '.php';
    return new ucwords($model);
  }

  protected function view( $view, $data = [] ){
    require '../App/views/' . $view . '.php';
  }

}
