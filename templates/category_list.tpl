{include file= "templates/header.tpl"}



<div class="container">

    <h3>{$titulo}</h3>

    <ul class="list-group">
        {foreach from=$categories item=$category}
            <li class='
            list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>{$category->categoria}</b> </span>
                <div class="ml-auto">

                    <a href='showProductsByCategory/{$category->id_categoria}' type='button' class='btn btn-success'>Ver
                        Productos</a>
                        {if isset($smarty.session.USER_ID)}
                    <a href='deleteCategories/{$category->id_categoria}' type='button' class='btn btn-danger'>Borrar</a>
                    <a href='updateCategories/{$category->id_categoria}' type='button' class='btn btn-danger'>Editar</a>
                        {/if}
                </div>
            </li>

        {/foreach}
    </ul>
    {if isset($smarty.session.USER_ID)}
    {include file="templates/add_category.tpl"}
    {/if}
</div>

{include file="templates/footer.tpl"}