<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:46:26
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\tableAndAutores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f4e929bae60_94020088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ee14cf3b2764960d4ffe9f88784ba2be7469be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\tableAndAutores.tpl',
      1 => 1633635984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f4e929bae60_94020088 (Smarty_Internal_Template $_smarty_tpl) {
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

    <form action="filterAutor" method="POST">
    <select>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autors']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>
, <?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre;?>
</option>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="submit" value="Filtrar" name="Filtrar">
    </form>
<?php }
}
