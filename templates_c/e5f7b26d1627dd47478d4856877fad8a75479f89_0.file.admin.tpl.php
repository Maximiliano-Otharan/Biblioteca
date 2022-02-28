<?php
/* Smarty version 3.1.39, created on 2021-11-21 20:03:45
  from 'C:\xampp\htdocs\TPEspecial\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a9811e22510_09148701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f7b26d1627dd47478d4856877fad8a75479f89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEspecial\\templates\\admin.tpl',
      1 => 1637521424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619a9811e22510_09148701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Administrador</h1>
  <h1>ADMINISTRADOR</h1>
    <div class="divUsuarios">
        <section>
            <ul class="listaUsuarios">
                <h3>Lista de administradores</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                        <li class="liUsuarios"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user']->value->Email,40);?>
<a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->Id_usuario;?>
">Borrar usuario</a>
                        <a href="removeAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->Id_usuario;?>
">Quitar permisos</a></li>
                    <?php }?>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                <h3>Lista de usuarios</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
                        <li class=:liUsuarios><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user']->value->Email,40);?>
<a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->Id_usuario;?>
">Borrar usuario</a>
                        <a href="giveAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->Id_usuario;?>
">Dar admin</a>
                    <?php }?>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

            </ul>
        </section>
        <section>
            <a class="botonVolver" href="home">Volver</a>
        </section>
    </div>

    
            <?php }
}
