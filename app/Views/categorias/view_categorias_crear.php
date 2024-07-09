<form class="ajax-form" action="<?= base_url("categorias/guardar") ?>" method="post">
    <div class="card">
        <div class="card-header">

            <!-- Título -->
            <div class="col-md-6 align-middle">
                <h4><b>Nueva categoría</b></h4>
            </div>

        </div>
        <div class="card-body">

            <!-- Nombre categoría-->
            <div class="mb-3">
                <label for="nombre_categoria" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" />
            </div>

            <!-- Botón -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("categorias/listar") ?>" role="button">Cancelar</a>

        </div>
    </div>
</form>