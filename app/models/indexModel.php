<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/
namespace app\models;

use app\Db;

class indexModel extends Db {
  public function listProdutos(){
      //Instancia a conexão com o banco
      $db = $this->getDb();

      $query = 'SELECT * FROM noticias';
      $sql = $db->prepare($query);
      $sql->execute();

      $dados = '<ul>';
      while($result = $sql->fetch(\PDO::FETCH_ASSOC)){
        $dados .=  '<li>'.$result['id'].'</li>';
      }
      $dados .= '</ul>';

      $db = null;

      return $dados;
  }
}
