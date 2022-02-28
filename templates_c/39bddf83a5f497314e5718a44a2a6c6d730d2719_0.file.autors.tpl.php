<?php
/* Smarty version 3.1.39, created on 2021-11-28 15:49:45
  from 'C:\xampp\htdocs\TPEspecial\templates\autors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a397091db317_63437243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39bddf83a5f497314e5718a44a2a6c6d730d2719' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEspecial\\templates\\autors.tpl',
      1 => 1638110983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61a397091db317_63437243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table  class="table table-dark table-hover">
        <thead>
            <th>Numero de autor</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th><hr/></th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>       
            <tr>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->Id_autor, 'UTF-8');?>
</td>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->Nombre, 'UTF-8');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->Apellido;?>
</td>
                <td> <a class="btn btn-info" href="autorLibros/<?php echo $_smarty_tpl->tpl_vars['item']->value->Id_autor;?>
">Leer mas...</a> </td>
                <td> <a class="btn btn-danger" href="eliminarAutor/<?php echo $_smarty_tpl->tpl_vars['item']->value->Id_autor;?>
">Eliminar</a> </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<h2>Registre un nuevo autor</h2>

<form action="agregarAutor" method="POST">
         <label>Nombre: </label><input type="text" name="Nombre">
        <label>Apellido: </label> <input type="text" name="Apellido">
        <input class="btn btn-success" type="submit" value="Enviar">
</form>

<h2>Modifique un autor existente</h2>

<form action="updateBook" method="POST">
         <label>Nombre: </label><input type="text" name="Nombre">
        <label>Apellido: </label> <input type="text" name="Apellido">
    <select name="select">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>    
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->Id_autor;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->Apellido;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
        <input class="btn btn-success" type="submit" value="Modificar">
</form>
<a href="home" class="btn btn-primary mt-5">Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
