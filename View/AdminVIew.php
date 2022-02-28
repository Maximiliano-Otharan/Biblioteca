<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class AdminView{
    private $smarty;
    function __construct()
    {
     $this->smarty = new Smarty();   
    }
    
    public function showUsuarios($usuarios,$admin){
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->assign('admin',$admin);
        $this->smarty->display('templates/admin.tpl');


    }
    function showAdminViewLocation(){
        header("Location:".BASE_URL."adminView");
    }
}