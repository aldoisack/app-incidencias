<form class="ajax-form" action="<?= base_url("oficinas/actualizar") ?>" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">

            <!-- Título ID -->
            <div class="col-md-6 align-middle">
                <h4><b>ID: <?= $oficina["id_oficina"]; ?></b></h4>
                <input type="hidden" class="form-control" name="id_oficina" id="id_oficina" value="<?= $oficina["id_oficina"] ?>" />
            </div>
        </div>

        <div class="card-body">

            <!-- Nombre oficina-->
            <div class="mb-3">
                <label for="nombre_oficina" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_oficina" id="nombre_oficina" value="<?= $oficina["nombre_oficina"]; ?>" />
            </div>

            <!-- Boton -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("oficinas/listar") ?>" role="button">Cancelar</a>

        </div>

    </div>
</form>