<!-- formulario de alta de producto -->

<form action="createProducts" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="newid" type="hidden">
                <label>Producto</label>
                <input name="newnombre" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="newid_categoria" class="form-control">
                    <div class="form-group">

                        <option selected>Categoria</option>
                        <option value="8">Deportes</option>
                        <option value="9">Disfraces</option>
                        <option value="10">Aire libre</option>
                        <option value="11">Licencias</option>
                        <option value="12">Muñecos</option>
                        <option value="13">Juegos de mesa</option>
                    </div>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="newdescripcion" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>precio</label>
            <textarea name="newprecio" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>