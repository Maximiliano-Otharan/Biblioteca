<?php
require_once 'Controller/AutoresController.php';
require_once 'Controller/LibrosController.php';
require_once 'Controller/UserController.php';
require_once 'Controller/AdminController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$AutoresController = new AutoresController();
$LibrosController = new LibrosController();
$userController=new UserController();
$adminController = new AdminController();
$params = explode('/',$action);
switch ($params[0]) {
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'register':
        $userController->register();
        break;
    case 'createAccount':
        $userController->createAccount();
        break;
    case 'verificar':
        $userController->verifyLogin();
        break;
    case 'home':
        $LibrosController->showHome();
        break;
    case 'autores':
        $AutoresController->showAutors();
        break;
    case 'autorLibros':
        $AutoresController->showBooksByAutor($params[1]);
        break;
    case 'viewDescripcion':
        $LibrosController->showBooksByTabla($params[1]);
        break;
    case 'generosLibros':
        $LibrosController->showBooksByGenero($params[1]);
        break;
    case 'agregarLibro':
        $LibrosController->agregarLibro();
        break;
    case 'deleteBook':
        $LibrosController->deleteBook($params[1]);
        break;
    case 'updateBook':
        $LibrosController->updateBook();
        break;
    case 'agregarAutor':
        $AutoresController->agregarAutor();
        break;
    case 'modificarAutor':
        $AutoresController->modificarAutor();
        break;
    case 'eliminarAutor':
        $AutoresController->eliminarAutor($params[1]);
        break;
    case 'adminView':
        $adminController->showAdmin();
        break;
    case 'deleteUser':
        $adminController->deleteUsuario($params[1]);
        break;
    case 'giveAdmin':
        $adminController->addAdmin($params[1]);
        break;
    case 'removeAdmin':
        $adminController->removeAdmin($params[1]);
        break;
    case 'guest':
        $userController->createAccountGuest();
        break;
        echo ('ERROR 404 not found');
        break;
}
          