<?php

require_once '../App/config.php';

class App {

  protected $controller_name = 'home';
  protected $controller = null;
  protected $method = 'index';
  protected $params = [];

  public function __construct(){

    $url = $this->parseUrl();

    if( file_exists( '../App/controllers/' . ucwords( $url[0] ) . '.php' ) ){
      $this->controller_name = ucwords( $url[0] );
    }

    require '../App/controllers/' . $this->controller_name . '.php';

    $this->controller = new $this->controller_name;

    if( isset( $url[1] ) ){
      if( method_exists($this->controllerm, $url[1]) ){
        $this->method = $url[1];
        unset($url[1]);
      } else {
        $this->method = 'default';
      }
    }

    $this->params = $url ? array_values( $url ) : [];

    call_user_func_array([ $this->controller, $this->method ], $this->params );
  }

  public function parseUrl(){
    if( isset( $_GET['url'] ) ){
      $url = rtrim( $_GET['url'] );
      $url = filter_var( $url, FILTER_SANITIZE_URL );
      return explode( '/', $url );
    }
  }

}
