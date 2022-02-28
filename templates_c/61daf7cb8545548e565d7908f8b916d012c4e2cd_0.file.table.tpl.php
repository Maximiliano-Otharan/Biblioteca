<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:40:51
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f4d43e12067_67581393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61daf7cb8545548e565d7908f8b916d012c4e2cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\table.tpl',
      1 => 1633635650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/autores.tpl' => 1,
  ),
),false)) {
function content_615f4d43e12067_67581393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['book']->value->Titulo;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['book']->value->Descripcion;?>
</th>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

<?php $_smarty_tpl->_subTemplateRender("file:templates/autores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
