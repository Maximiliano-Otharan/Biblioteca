{include file="templates/header.tpl"}

<table class="table table-dark table-striped">
        <tr>
            <th>Libro</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
            {if $rolAndId[1] == 1}
                <th>Eliminar</th>
            {/if}
        </tr>
        {foreach from=$genero item=$gen}
        <tr>
            <td>{$gen->Titulo|upper}</td>
            <td>{$gen->Genero}</td>
            <td>{$gen->Descripcion|lower|truncate:20}</td>
            <td> <a class="btn btn-warning" href="viewDescripcion/{$gen->id_libros}">Leer mas...</a> </td>
            {if $rolAndId[1] == 1}
                <td> <a class="btn btn-danger" href="deleteBook/{$gen->id_libros}">Eliminar</a> </td>
            {/if}
        </tr>
        {/foreach}
</table>

<a href='home' class="btn btn-primary mt-5"> Volver al home </a>

{include file="footer.tpl"}