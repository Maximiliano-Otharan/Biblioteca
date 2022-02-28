<?php
require_once './Model/LibrosModel.php';
require_once './View/LibrosView.php';
require_once './Helper/AuthHelper.php';
require_once './Controller/AutoresController.php';

class LibrosController{
    private $modelLibros;
    private $view;
    private $authHelper;
    private $autoresController;
    function __construct()
    {
        $this->modelLibros = new LibrosModel();
        $this->view = new LibrosView();
        $this->authHelper = new AuthHelper();
        $this->userController = new UserController();
        $this->autoresController = new AutoresController();
    }

    function showHome(){
        $genero = $this->modelLibros->getGenProm();
        $books = $this->modelLibros->getBooks();
        $rolAndId = $this->authHelper->returnUserIdAndRol();
        $autores = $this->autoresController->getAutors();
        $this->view->showHome($books, $genero, $rolAndId, $autores);
    }
    function showBooksByTabla($id_libro){
        $item = $this->modelLibros->getBook($id_libro);
        $user = $this->authHelper->returnUserIdAndRol();
        $this->view->showBook($item, $user);
    }
    function showBooksByGenero($genero){
        $gen = $this->modelLibros->getLibrosGenero($genero);
        $rolAndId = $this->authHelper->returnUserIdAndRol();
        $this->view->showBooksGenero($gen, $rolAndId);
    }
    function agregarLibro(){
        $this->authHelper->checkAdminLoggedIn();
        $books = $this->modelLibros->getBookWithAtributte($_POST['titulo'], $_POST['genero'], $_POST['select']);
        if($books == []){
            $this->modelLibros->createBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        }
        $this->view->showHomeLocation();
    }
    function deleteBook($id){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelLibros->deleteBook($id);
        $this->view->showHomeLocation();
    }
    function updateBook(){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelLibros->updateBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        $this->view->showHomeLocation();
    }

}
