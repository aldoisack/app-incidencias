<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 align-middle">
                    <br>
                    <h4>ID:<?php echo $tecnico["id_usuario"] ?></h4>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="id_estado" class="form-label">Estado</label>
                        <select class="form-select form-select-mg" name="id_estado" id="id_estado">
                            <option value="1" selected>Habilitado</option>
                            <?php if (current_url() != base_url("tecnicos/crear")) { ?>
                                <option value="2">Inhabilitado</option>
                            <?php } ?>
                        </select>
                    </div>

                </div>

            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url("tecnicos/guardar") ?>" method="post" enctype="multipart/form-data">

                <!-- Nombres -->
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="helpId" placeholder="" />
                </div>

                <!-- Apellidos -->
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="" />
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <!-- Correo -->
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="" />
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <label for="contrasenia" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="" />
                        </div>

                    </div>
                    <div class="col-md-6">

                        <!-- Perfil -->
                        <div class="mb-3">
                            <label for="id_perfil" class="form-label">Perfil</label>
                            <select class="form-select form-select-mb" name="id_perfil" id="id_perfil">
                                <?php
                                foreach ($perfiles as $registro) {
                                    if ($registro["nombre_perfil"] == "Técnico") {
                                ?>
                                        <!--
                                        <option value="id">
                                            Técnico
                                        </option>
                                        -->
                                        <option value="<?php echo $registro["id_perfil"] ?>">
                                            <?php echo $registro["nombre_perfil"] ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>


                        <!-- Oficina -->
                        <div class="mb-3">
                            <label for="id_oficina" class="form-label">Oficina</label>
                            <select class="form-select form-select-mb" name="id_oficina" id="id_oficina">
                                <?php
                                foreach ($oficinas as $registro) {
                                    if ($registro["nombre_oficina"] == "Tecnologías de la información") {
                                ?>
                                        <!--
                                        <option value="id">
                                            Tecnologías de la información
                                        </option>
                                        -->
                                        <option value="<?php echo $registro["id_oficina"] ?>">
                                            <?php echo $registro["nombre_oficina"] ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>


                <!-- Botones -->
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </div>

</main>