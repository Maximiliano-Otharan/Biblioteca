<?php
class AutoresModel{
    private $dbAutores;
    function __construct()
    {
        $this->dbAutores=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function getAutors(){
        $query=$this->dbAutores->prepare("SELECT * FROM Autores");
        $query->execute();
        $autors = $query->fetchAll(PDO::FETCH_OBJ);
        return $autors; 
    }
    function getAutor($Id_autor){
        $query=$this->dbAutores->prepare("SELECT a.Nombre,a.Apellido,b.Titulo,b.Genero,b.Descripcion,b.id_libros FROM Autores a INNER JOIN Libros b ON a.Id_autor = b.fk_Id_autor WHERE  Id_autor=? ");
        $query->execute(array($Id_autor));
        $items=$query->fetchAll((PDO::FETCH_OBJ));
        return $items;
    }
    function crearAutor($nombre, $apellido){
        $sentencia = $this->dbAutores->prepare("INSERT INTO Autores(Nombre, Apellido) VALUES(?, ?)");
        $sentencia->execute(array($nombre, $apellido));
    }
    function modificarAutor($nombre, $apellido, $Id_autor){
        $sentencia = $this->dbAutores->prepare("UPDATE Autores SET Nombre = ?, Apellido = ? WHERE Id_autor = ?");
        $sentencia->execute(array($nombre, $apellido, $Id_autor));
    }
    function eliminarAutor($Id_autor){
        $sentencia = $this->dbAutores->prepare("DELETE FROM Autores WHERE Id_autor=?");
        $sentencia->execute(array($Id_autor));
    }
}