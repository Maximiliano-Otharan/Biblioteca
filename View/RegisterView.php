<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class RegisterView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showRegister(){
        $this->smarty->assign('titulo','register');
        $this->smarty->display('templates/register.tpl');
    }
}
