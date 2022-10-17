{include file= "templates/header.tpl"}

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>

        {foreach from=$productos item=$producto}
            <tbody class="table-group-divider">
                <tr>
                    <td>{$producto->nombre}</td>
                    <td>{$producto->descripcion}</td>
                    <td>{$producto->precio}</td>


                </tr>
            </tbody>

        {{/foreach}}

    </table>
    <a href="home" type='button' class='btn btn-success'>Volver</a>
</div>


{include file="templates/footer.tpl"}