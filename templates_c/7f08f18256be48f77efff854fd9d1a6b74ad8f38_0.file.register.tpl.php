<?php
/* Smarty version 3.1.39, created on 2021-10-14 17:58:11
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61685393916d55_12924103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f08f18256be48f77efff854fd9d1a6b74ad8f38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\register.tpl',
      1 => 1634226692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61685393916d55_12924103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="row g-3" method="POST" action="createAccount">
<h2> register</h2>
  <div class="col-auto">
  <label for="Email" >Ingres su email</label>
    <input type="text"  name="Email" id="Email"; required>
  </div>
  <div class="col-auto">
  <label for="Password">Ingrese su password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
  </div>
</form><?php }
}
