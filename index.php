<?php
/*
 * Weslley Neves Dutra
 * Agência Kairós
 * contato@agenciakairos.com.br
*/
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);

require_once "vendor/autoload.php";

use bootstrap\routes;
$routes = new routes();

$routes->initRoutes('/','index@index');
$routes->initRoutes('/sample','index@sample');

$routes->dispatch();
