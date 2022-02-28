<?php
/* Smarty version 3.1.39, created on 2021-10-14 17:55:59
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\guestAutorBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168530f4d8801_48950535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a910daf010720d67d41f6ad0b644acfb8593c261' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\guestAutorBooks.tpl',
      1 => 1634226692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168530f4d8801_48950535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe2\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.Capitalize.php','function'=>'smarty_modifier_Capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\Tpe2\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table  class="table table-dark table-hover">
        <thead>
            <th>Autor</th>
            <th>Libro</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
        </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <tbody>
            <tr>
                <td><?php echo smarty_modifier_Capitalize($_smarty_tpl->tpl_vars['item']->value->Apellido);?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value->Nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->Titulo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->Genero;?>
</td>
                <td><?php echo smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['item']->value->Descripcion, 'UTF-8'),20);?>
</td>
                <td> <a class="btn btn-warning" href="viewDescripcion/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_libros;?>
">Leer mas...</a> </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>

<a href='guest' class="btn btn-primary mt-5"> Volver al home </a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
