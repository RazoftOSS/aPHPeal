<?php

class DBTable {

  private $c;
  public $name;

  public function __construct( $c, $name ){
    $this->name = $name;
    $this->c = $c;
  }

  public function find( $items, $returnFields = [] ){
    if( empty($returnFields) ){
      
    }

    $qStr = "SELECT "
    $query = mysqli_query($this->c, "");
  }

}
