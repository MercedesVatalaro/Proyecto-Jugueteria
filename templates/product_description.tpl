{include file= "templates/header.tpl"}



<div class="container">
    <h1>{$titulo}</h1>


    {foreach from=$producto item=$juguete}

        <h2> Producto: {$juguete->nombre}</h2>
        <h3>Descripción: {$juguete->descripcion}</h3>
        <h3>Precio: {$juguete->precio}</h3>
        <h3>Categoría: {$juguete->categoria}</h3>


    {/foreach}

    <a href="home" type='button' class='btn btn-success'>Volver</a>
</div>

{include file="templates/footer.tpl"}