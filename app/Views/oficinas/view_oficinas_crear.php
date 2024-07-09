<form class="ajax-form" action="<?= base_url("oficinas/guardar") ?>" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">

            <!-- Título -->
            <div class="col-md-6 align-middle">
                <h4><b>Nueva oficina</b></h4>
            </div>

        </div>
        <div class="card-body">

            <!-- Nombre oficina-->
            <div class="mb-3">
                <label for="nombre_oficina" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_oficina" id="nombre_oficina" aria-describedby="helpId" placeholder="" />
            </div>

            <!-- Botón -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("oficinas/listar") ?>" role="button">Cancelar</a>

        </div>
    </div>
</form>