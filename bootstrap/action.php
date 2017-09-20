<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/
namespace bootstrap;

class action{

  protected $view;
  protected $action;

  public function __construct(){
    $this->view = new \stdClass;
  }

  ///Sem twig
  public static function render($action, $args = [])
    {
      extract($args, EXTR_SKIP);

      $file = dirname(__DIR__) . "/app/views/pages/$action";
      if (is_readable($file)) {
          require $file;
      } else {
          throw new \Exception("$file não encontrato.");
      }
    }

    //Com twig
    public static function renderTemplate($template, $args = [])
    {
      static $twig = null;
      if ($twig === null) {
          $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/app/views/pages');
          $twig = new \Twig_Environment($loader);

      }
      echo  $twig->render($template, $args);
    }
}
