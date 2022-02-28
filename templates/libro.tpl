{include file="templates/header.tpl"}

<div class="container px-5 p-5 border bg-light">

    <h1>Titulo: {$item->Titulo}</h1>

        <h3>Genero: {$item->Genero}</h3>

        <h5 class="mt-5">Descripcion:</h5>
    <div class="p-3 p-5 border bg-light">
        <p>{$item->Descripcion}</p>
    </div>

    <a href='home' class="btn btn-primary mt-5"> Volver al home </a>

    <hr>

    {if $user[1] != -1}
        <form id="form-comentarios" data-id_libros="{$item->id_libros}" data-id_usuario="{$user[0]}" data-rol="{$user[1]}" class="formulario-comentarios">
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
    {/if}
    
</div>




{include file="templates/footerJS.tpl"}