<?php
/* Smarty version 3.1.39, created on 2021-11-29 01:07:39
  from 'C:\xampp\htdocs\Tpe 2 web\TPEspecial\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a419cb0879f8_40380896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab9840cb52d06b0cfd4ddb31a60f915c71b51d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2 web\\TPEspecial\\templates\\libro.tpl',
      1 => 1638144457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footerJS.tpl' => 1,
  ),
),false)) {
function content_61a419cb0879f8_40380896 (Smarty_Internal_Template $_smarty_tpl) {
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

    <a href='home' class="btn btn-primary mt-5"> Volver al home </a>

    <hr>

    <?php if ($_smarty_tpl->tpl_vars['user']->value[1] != -1) {?>
        <form id="form-comentarios" data-id_libros="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_libros;?>
" data-id_usuario="<?php echo $_smarty_tpl->tpl_vars['user']->value[0];?>
" data-rol="<?php echo $_smarty_tpl->tpl_vars['user']->value[1];?>
" class="formulario-comentarios">
            <p>
                Comentario:  <input type="text" name="comentario" id="comentario" value="" placeholder="Comentario.." required>
                Puntaje: <input type="number" name="puntaje" id="puntaje" value="" placeholder="Puntaje" min="1" max="5">
            </p>
            <input type="submit" value="Comentar" class="btn btn-primary mt-5" id="btn-comentario">
        
        </form>
        
        <section>
            <button class="btn btn-primary mt-5" id="descendente">Ordenar de manera descendente</button>
            <button class="btn btn-primary mt-5" id="ascendente">Ordenar de manera ascendente</button>
            Filtrar por Puntaje<input type="number" id="filtroPuntaje"> <button id="btn-filtro">Filtrar</button>
            <table id="comentarios-section">
        
            </table>
        </section>
    <?php }?>
    
</div>




<?php $_smarty_tpl->_subTemplateRender("file:templates/footerJS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
