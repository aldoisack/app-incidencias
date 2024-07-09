<form class="ajax-form" action="<?= base_url("tecnicos/actualizar") ?>" method="post">
    <div class="card">
        <div class="card-header">
            <!-- Título -->
            <div class="col-md-6 align-middle">
                <h4><b>Editar técnico</b></h4>
                <input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="<?php echo $tecnico["id_usuario"]; ?>" />
            </div>
        </div>
        <div class="card-body">
            <!-- Nombres -->
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $tecnico["nombres"]; ?>" />
            </div>
            <!-- Apellidos -->
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $tecnico["apellidos"]; ?>" />
            </div>
            <!-- Usuario -->
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $tecnico["usuario"]; ?>" />
            </div>
            <!-- Botones -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("tecnicos/listar") ?>" role="button">Cancelar</a>
        </div>
    </div>
</form>