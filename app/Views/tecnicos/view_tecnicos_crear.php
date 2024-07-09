<form class="ajax-form" action="<?= base_url("tecnicos/guardar") ?>" method="post">
    <div class="card">

        <div class="card-header">
            <div class="col-md-6 align-middle">
                <h4><b>Nuevo técnico</b></h4>
            </div>
        </div>

        <div class="card-body">

            <!-- -------------------------------------- -->
            <!-- Nombres -->
            <!-- -------------------------------------- -->
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres" required />
            </div>


            <!-- -------------------------------------- -->
            <!-- Apellidos -->
            <!-- -------------------------------------- -->
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" required />
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- -------------------------------------- -->
                    <!-- Usuario -->
                    <!-- -------------------------------------- -->
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required />
                    </div>


                    <!-- -------------------------------------- -->
                    <!-- Contraseña -->
                    <!-- -------------------------------------- -->
                    <div class="mb-3">
                        <label for="contrasenia" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" required />
                    </div>

                    <!-- -------------------------------------- -->
                    <!-- Confirmar contraseña -->
                    <!-- -------------------------------------- -->
                    <div class="mb-3">
                        <label for="confirmar_contrasenia" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="confirmar_contrasenia" id="confirmar_contrasenia" required />
                    </div>

                </div>
                <div class="col-md-6">


                    <!-- -------------------------------------- -->
                    <!-- Pregunta seguridad -->
                    <!-- -------------------------------------- -->
                    <div class="mb-3">
                        <label for="pregunta_seguridad" class="form-label">Pregunta seguridad</label>
                        <input type="text" class="form-control" name="pregunta_seguridad" id="pregunta_seguridad" required />
                    </div>

                    <!-- -------------------------------------- -->
                    <!-- Respuesta seguridad -->
                    <!-- -------------------------------------- -->
                    <div class="mb-3">
                        <label for="respuesta_seguridad" class="form-label">Respuesta seguridad</label>
                        <input type="text" class="form-control" name="respuesta_seguridad" id="respuesta_seguridad" required />
                    </div>

                </div>
            </div>

            <!-- Botones -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("tecnicos/listar") ?>" role="button">Cancelar</a>


        </div>
    </div>
</form>