<?php
/* Smarty version 3.1.39, created on 2021-11-23 20:40:27
  from 'C:\xampp\htdocs\Tpe 2 web\TPEspecial\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d43ab35b766_33070550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b63bd44b1e3102bcebca89a2ab9f78a46fa6081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2 web\\TPEspecial\\templates\\admin.tpl',
      1 => 1637529973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619d43ab35b766_33070550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe2web\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
