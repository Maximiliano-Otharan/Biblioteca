<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class AutoresView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showAutors($items, $idAndRol){
        $this->smarty->assign('items',$items);
        $this->smarty->assign('idAndRol', $idAndRol);
        $this->smarty->display('templates/autors.tpl');
    }

    function showBooksAutor($items){
        $this->smarty->assign('items',$items);
        $this->smarty->display('templates/autorAndBooks.tpl');
    }

    function showAutorsLocation(){
        header("Location: ".BASE_URL."autores");
    }
    

}