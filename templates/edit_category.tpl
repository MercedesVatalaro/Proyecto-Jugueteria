{include file= "templates/header.tpl"}


<!-- formulario de edicion de categoria-->



<div class="container">

    <form action="updateCategory/{$categoria->id_categoria}" method="POST" class="my-4">

        <div class="row">
            <div class="col-9">
                <input name="id_categoria" type="hidden" value="{$categoria->id_categoria}">

                <div class="form-group">
                    <label>Categoria</label>

                    <input name="categoria" type="text" class="form-control" Value="{$categoria->categoria}">
                </div>
            </div>


        </div>


        <button type="submit" class="btn btn-primary mt-2">Editar categoria</button>

    </form>
</div>





{include file="templates/footer.tpl"}