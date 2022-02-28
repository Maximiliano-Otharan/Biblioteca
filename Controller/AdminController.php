<?php
require_once './View/AdminView.php';
require_once './Model/UserModel.php';
require_once './Helper/AuthHelper.php';
class AdminController
{
 private $view;
 private $model;
 private $authHelper;
 function __construct()
 {
  $this->view = new AdminView();
  $this->model = new UserModel();
  $this->authHelper = new AuthHelper();   
 }   
function showAdmin(){
    $rol = $this->authHelper->checkAdminLoggedIn();
    $usuarios = $this->model->getAllUsers();
    $this->view->showUsuarios($usuarios,$rol);
}
function addAdmin($Id_usuario){
    $this->authHelper->checkAdminLoggedIn();
    $this->model->fromUserToAdmin($Id_usuario);
    $this->view->showAdminViewLocation();
}
function removeAdmin($Id_usuario){
    $this->authHelper->checkAdminLoggedIn();
    $this->model->fromAdminToUSer($Id_usuario);
    $this->view->showAdminViewLocation();

}

function deleteUsuario($Id_usuario){
    $this->model->deleteUser($Id_usuario);
    $this->authHelper->adminDeleteUser($Id_usuario);
    $this->view->showAdminViewLocation();
}
}
