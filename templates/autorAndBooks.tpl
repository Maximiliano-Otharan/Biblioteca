{include file="templates/header.tpl"}

<table  class="table table-dark table-hover">
        <thead>
            <th>Autor</th>
            <th>Libro</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
        </thead>
            {foreach from=$items item=$item}
        <tbody>
            <tr>
                <td>{$item->Apellido|Capitalize}, {$item->Nombre}</td>
                <td>{$item->Titulo}</td>
                <td>{$item->Genero}</td>
                <td>{$item->Descripcion|lower|truncate:20}</td>
                <td> <a class="btn btn-warning" href="viewDescripcion/{$item->id_libros}">Leer mas...</a> </td>
                </tr>
            {/foreach}
        </tbody>
</table>
<a href='home' class="btn btn-primary mt-5"> Volver al home </a>

{include file="templates/footer.tpl"}