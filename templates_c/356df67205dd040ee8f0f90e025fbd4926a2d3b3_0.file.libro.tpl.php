<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:58:18
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61688bdaa5ca37_72877582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356df67205dd040ee8f0f90e025fbd4926a2d3b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\libro.tpl',
      1 => 1634241485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61688bdaa5ca37_72877582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container px-5 p-5 border bg-light">

    <h1>Titulo: <?php echo $_smarty_tpl->tpl_vars['item']->value->Titulo;?>
</h1>

        <h3>Genero: <?php echo $_smarty_tpl->tpl_vars['item']->value->Genero;?>
</h3>

        <h5 class="mt-5">Descripcion:</h5>
    <div class="p-3 p-5 border bg-light">
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value->Descripcion;?>
</p>
    </div>

    <form action="addReseña" method="POST">
         <label>TItulo: </label><input type="text" name="titulo">
        <label>Genero: </label> <input type="text" name="genero">
        <label>Descripcion: </label> <textarea name="texto"cols="30" rows="1"></textarea>
        <input class="btn btn-success" type="submit" value="Modificar">
</form>

    <a href='home' class="btn btn-primary mt-5"> Volver al home </a>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
