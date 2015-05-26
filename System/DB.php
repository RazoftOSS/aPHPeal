<?php

include 'DBTable.php';

class DB {

  protected $c;

  public function __construct(){
    $this->c = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


    
  }

  public function clean( $str ){
    return mysqli_real_escape_string( $this->c, $str );
  }

  public function query( $str ){

  }

  public function createTables(){

  }

  public function remove( ){

  }

}
