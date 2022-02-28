<?php
/* Smarty version 3.1.39, created on 2021-11-13 20:00:44
  from 'C:\xampp\htdocs\TPEspecial\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61900b5cb661e9_26605251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b1ae8ed261f62e7eaebb4d23568f26c4c3043b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEspecial\\templates\\register.tpl',
      1 => 1636829884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61900b5cb661e9_26605251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="row g-3" method="POST" action="createAccount">
<h2> register</h2>
  <div class="col-auto">
  <label for="Email" >Ingrese su usuario</label>
    <input type="text"  name="Nombreusuario" id="Nombreusuario"; required>
  </div>
  <div class="col-auto">
  <label for="Email" >Ingrese su email</label>
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
