<form class="ajax-form" action="<?= base_url("categorias/actualizar") ?>" method="post">
    <div class="card">
        <div class="card-header">

            <!-- Título ID -->
            <div class="col-md-6 align-middle">
                <h4><b>ID: <?= $categoria["id_categoria"]; ?></b></h4>
                <input type="hidden" class="form-control" name="id_categoria" id="id_categoria" value="<?= $categoria["id_categoria"] ?>" />
            </div>
        </div>

        <div class="card-body">

            <!-- Nombre categoria-->
            <div class="mb-3">
                <label for="nombre_categoria" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" value="<?= $categoria["nombre_categoria"]; ?>" />
            </div>

            <!-- Boton -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("categorias/listar") ?>" role="button">Cancelar</a>

        </div>

    </div>
</form>