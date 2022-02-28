<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:13:21
  from 'C:\xampp\htdocs\Tpe 2 web\TPEspecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bc1a1d1df81_81349441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f03f22a922e578fdf412f3c30cc4d7d30bab68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2 web\\TPEspecial\\templates\\login.tpl',
      1 => 1637529973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619bc1a1d1df81_81349441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="row g-3" method="POST" action="verificar">
<h2>Log in</h2>
 <div class="col-auto">
  <label for="User" >User</label>
    <input type="text"  name="Nombreusuario" id="Nombreusuario"; required>
  </div>
  <div class="col-auto">
  <label for="Email" >Email</label>
    <input type="text"  name="Email" id="Email"; required>
  </div>
  <div class="col-auto">
  <label for="Password">Password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
  <p>Dont have an account yet, click <a href="register">here</a></p>
  <p>visit the page as a guest click <a href="guest">here</a></p>
  <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</form><?php }
}
