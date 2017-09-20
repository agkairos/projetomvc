<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/

namespace app;

abstract class Db{

  const PDO_TYPE = 'mysql';
  const PDO_CHARSET = 'utf8';
  const PDO_HOST = 'localhost';
  const PDO_DBNAME = 'mvc';
  const PDO_USER = 'root';
  const PDO_PWD = '';

  protected static function getDB(){
    static $db = null;

    if ($db === null) {
        $opcoes = array(
          \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
          \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
          \PDO::ATTR_PERSISTENT => false
        );

        $db = new \PDO(self::PDO_TYPE . ":host=" . self::PDO_HOST . "; dbname=" . self::PDO_DBNAME . "; charset=" . self::PDO_CHARSET . ";",self:: PDO_USER, self::PDO_PWD, $opcoes);
    }
    return $db;
  }
}
