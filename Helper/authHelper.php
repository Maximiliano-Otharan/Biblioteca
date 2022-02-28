<?php
class AuthHelper{
    function checkAdminLoggedIn(){
        session_start();
        if($_SESSION['Email'] == null){
            header("Location:".BASE_URL."login");
            die();
        }
    }
    function adminDeleteUser($id){
        session_start();
        if(isset($_SESSION['id_usuario'])){
            if($_SESSION['id_usuario'] == $id){
                header("Location:".BASE_URL."login");
                die(); 
            }
        }
    }
    function checkRol(){
        session_start();
        if(isset($_SESSION['Email']) && ($_SESSION['admin']==1)){
            $rol="admin";

        }else if(isset($_SESSION['Email']) && ($_SESSION['admin']!=1)){
            $rol = "user";
        }else{
            $rol = "guest";
        }
        return $rol;
    }
    function adminView(){
        session_start();
        if($_SESSION["admin"]==1){
            header("Location:".BASE_URL."login");
            die();
        }else{
            if(isset($_SESSION['Email']) && $_SESSION['admin'] == 1){
                $rol = "admin";
            }
            elseif (isset($_SESSION['Email']) && ($_SESSION['admin'] != 1)){
                $rol = "usuario";
            }
            else{
                $rol = "invitado";
            }
            return $rol;
        }
    }
    function returnUserIdAndRol(){
        $this->checkAdminLoggedIn();
        if(isset($_SESSION['id_usuario']) && isset($_SESSION['admin'])){
            $idAndRol = [];
            $idAndRol[0] = $_SESSION['id_usuario'];
            $idAndRol[1] = $_SESSION['admin'];
            return $idAndRol;
        }
    }
}