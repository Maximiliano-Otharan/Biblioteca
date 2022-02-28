<?php
require_once './Model/AutoresModel.php';
require_once './View/AutoresView.php';
require_once './Helper/AuthHelper.php';

class AutoresController{

    private $modelAutores;
    private $view;
    private $authHelper;

    function __construct(){
        $this->modelAutores = new AutoresModel();
        $this->view = new AutoresView();
        $this->authHelper = new AuthHelper();
    }

    function showAutors(){
        $autores = $this->modelAutores->getAutors();
        $irAndRol = $this->authHelper->returnUserIdAndRol();
        $this->view->showAutors($autores, $irAndRol);
    }

    function getAutors(){
        $autores = $this->modelAutores->getAutors();
        return $autores;
    }

    function showBooksByAutor($Id_autor){
        $itemsAutor=$this->modelAutores->getAutor($Id_autor);
        $this->view->showBooksAutor($itemsAutor);
    }

    function agregarAutor(){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelAutores->crearAutor($_POST['Nombre'], $_POST['Apellido']);
        $this->view->showAutorsLocation();
    }

    function modificarAutor(){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelAutores->modificarAutor($_POST['Nombre'], $_POST['Apellido'], $_POST['select']);
        $this->view->showAutorsLocation();
    }

    function eliminarAutor($id){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelAutores->eliminarAutor($id);
        $this->view->showAutorsLocation();
    }

}