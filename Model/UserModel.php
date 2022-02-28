<?php
class UserModel
{
    private $dbUser;
    function __construct()
    {
        $this->dbUser=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function createUser($Email, $Password,$Nombreusuario){
        $Password=password_hash($_POST['Password'],PASSWORD_BCRYPT);
        $sentencia = $this->dbUser->prepare("INSERT INTO usuario(Email,Password,Nombreusuario) VALUES(?, ?, ?)");
        $sentencia->execute([$Email,$Password,$Nombreusuario]);
    }
    function createUserGuest($Email, $Password, $Nombreusuario, $admin){
        $Password= password_hash($Password ,PASSWORD_BCRYPT);
        $sentencia = $this->dbUser->prepare("INSERT INTO usuario(Email,Password,Nombreusuario,admin) VALUES(?, ?, ?, ?)");
        $sentencia->execute([$Email,$Password, $Nombreusuario, $admin]);
    }
    function getAllUsers(){
        $query = $this->dbUser->prepare("SELECT * FROM usuario");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getUserMail($Email){
        $sentencia= $this->dbUser->prepare("SELECT  * FROM  usuario WHERE  Email=?");
        $sentencia->execute([$Email]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }
        function getUser($Nombreusuario, $Email){
        $sentencia = $this->dbUser->prepare("SELECT * FROM usuario WHERE Nombreusuario = ? AND Email = ?");
        $sentencia->execute(array($Nombreusuario, $Email));
        $user = $sentencia->fetch((PDO::FETCH_OBJ));
        return $user;

    }
    function getAdmin(){
        $query = $this->dbUser->prepare("SELECT Email FROM usuario WHERE admin=1");
        $query->execute();
        $admin = $query->fetchAll(PDO::FETCH_OBJ);
        return $admin;
    }
    function deleteUser($Id_usuario){
        $query = $this->dbUser->prepare("DELETE FROM usuario WHERE Id_usuario=?");
        $query->execute(array($Id_usuario));
    }
    function fromAdminToUSer($Id_usuario){
        $query = $this->dbUser->prepare("UPDATE usuario SET admin=0 WHERE Id_usuario=?");
        $query->execute(array($Id_usuario));
    }
    function fromUserToAdmin($Id_usuario){
        $query = $this->dbUser->prepare("UPDATE usuario SET admin=1 WHERE Id_usuario=?");
        $query->execute(array($Id_usuario));
    }
}


