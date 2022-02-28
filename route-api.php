<?php


require_once './libs/Router.php';
require_once './Controller/apiController.php';

$router = new Router();

$router->addRoute('comentarios/filtro/:Puntaje/:ID', 'GET', 'apiController', 'filtroPuntaje');
$router->addRoute('comentarios/orderDesc/:ID', 'GET', 'apiController', 'getComentsOrderDesc');
$router->addRoute('comentarios/orderAscen/:ID', 'GET', 'apiController', 'getComentsOrderAscen');
$router->addRoute('comentarios/:ID', 'GET', 'apiController', 'getComentariosConUsuario');
$router->addRoute('comentarios/:ID', 'DELETE', 'apiController', 'deleteComent');
$router->addRoute('comentarios', 'POST', 'apiController', 'addComent');
$router->addRoute('comentarios/:ID', 'PUT', 'apiController', 'updateComent');
$router->route($_GET["resource"],$_SERVER['REQUEST_METHOD']);