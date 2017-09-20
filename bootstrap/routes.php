<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/

namespace bootstrap;

use Klein\Klein as klein;

class routes extends klein{
  protected $request;
	protected $response;
	protected $service;
	protected $app;

	public function __loadVars($request, $response, $app){
		$this->request = $request;
		$this->response = $response;
		$this->app = $app;
	}

  public function initRoutes($route, $call){

    if(is_string($call)){

    $explode = explode("@", $call);
    $controller = "app\\controllers\\".$explode[0]."Controller";
    $action = $explode[1];

    $this->respond("GET", $route , function($request, $response, $app) use ($controller, $action){

    $class = new $controller();
    $this-> __loadVars($request, $response, $app);

    return $class->$action();
  });

    }else{
      $this-> respond("GET", $route, $call);
    }
  }

}
