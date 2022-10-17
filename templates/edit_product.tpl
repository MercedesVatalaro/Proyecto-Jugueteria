{include file= "templates/header.tpl"}

<div class="container">
<form method="POST" action="updateProduct/{$producto->id}" class="my-4">

    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="id" id="id" type="hidden" value="{$producto->id}">
                <label>Producto</label>
                <input name="nombre" id="nombre" type="text" class="form-control" value="{$producto->nombre}" >
            </div>
        </div>    

        <div class="form-group">
            <label>Descripcion</label>
            <input name="descripcion" id="descripcion" class="form-control" rows="3" value="{$producto->descripcion}">
        </div>
        <div class="form-group">
            <label>precio</label>
            <input name="precio" id="precio" class="form-control" rows="3" value="{$producto->precio}">
        </div>
        <div class="col-3">
        <div class="form-group">
            <label>Categoria</label>
            <select name="id_categoria" id="id_categoria" class="form-control">
                {foreach from=$categorias item=$categoria}
                    <option {if {$categoria->id_categoria}=={{$producto->id_categoria}}}
                        selected={$categoria->id_categoria} {/if} value="{$producto->id_categoria}">
                        {$categoria->categoria}</option>

                {/foreach}
            </select>
        </div>
    </div>    
    <input type='submit' class='btn btn-danger' name='editar' id='editar' value= "Editar">                  
    
</form>
        
</div>



{include file="templates/footer.tpl"}