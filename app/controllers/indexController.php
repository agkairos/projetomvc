<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/

namespace app\controllers;

use bootstrap\action;
use app\models\indexModel;
use app\Db;

class indexController extends action{

  public function index(){

    /*$produtos = new indexModel();
    $produtos = array('nomes'=>$produtos->listProdutos());*/
    
    $produtos = array(
      array(
      'name'=>'TV',
      'price'=>'R$2000.00'
      ),
      array(
      'name'=>'VIDEOGAME',
      'price'=>'R$1500.00'
      ),
    );

    $this->renderTemplate('index.html', array('produtos'=>$produtos));
}

  public function sample(){
    $this->renderTemplate('sample.html');
  }

}
