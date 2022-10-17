<!-- formulario de alta de categoria -->

<form action="createCategories" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="id" type="hidden">
                <label>Categoria</label>
                <input name="newcategoria" type="text" class="form-control">
            </div>
        </div>


        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>