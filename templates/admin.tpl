{include file="templates/header.tpl"}
<h1>Administrador</h1>
  <h1>ADMINISTRADOR</h1>
    <div class="divUsuarios">
        <section>
            <ul class="listaUsuarios">
                <h3>Lista de administradores</h3>
                {foreach from=$usuarios item=user}
                    {if $user->admin==1}
                        <li class="liUsuarios">{$user->Email|truncate:40}<a href="deleteUser/{$user->Id_usuario}">Borrar usuario</a>
                        <a href="removeAdmin/{$user->Id_usuario}">Quitar permisos</a></li>
                    {/if}
                {{/foreach}}
                <h3>Lista de usuarios</h3>
                {foreach from=$usuarios item=user}
                    {if $user->admin==0}
                        <li class=:liUsuarios>{$user->Email|truncate:40}<a href="deleteUser/{$user->Id_usuario}">Borrar usuario</a>
                        <a href="giveAdmin/{$user->Id_usuario}">Dar admin</a>
                    {/if}
                {{/foreach}}
            </ul>
        </section>
        <section>
            <a class="botonVolver" href="home">Volver</a>
        </section>
    </div>

    
            