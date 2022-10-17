{include file= "templates/header.tpl"}

<div class="container">
    <h3>{$titulo}</h3>

    <ul class="list-group">
        {foreach from=$products item=$producto}
            <li class='
                list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>{$producto->nombre}</b> {$producto->descripcion|truncate:25} ({$producto->precio})</span>
                <div class="ml-auto">

                    <a href='viewProducts/{$producto->id}' type='button' class='btn btn-success'>Ver</a>
                    {if isset($smarty.session.USER_ID)}
                    <a href='deleteProducts/{$producto->id}' type='button' class='btn btn-danger'>Borrar</a>
                    <a href='updateProducts/{$producto->id}' type='button' class='btn btn-danger'>Editar</a>
                    {/if}
                </div>
            </li>

        {/foreach}
    </ul>
    {if isset($smarty.session.USER_ID)}
    <h1>{$tituloform}</h1>
    {include file="templates/add_product.tpl"}
    {/if}
</div>
{include file="templates/footer.tpl"}