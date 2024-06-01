<br>


<main class="container">

    <form
        action="<?php echo base_url("tecnicos/guardar_cambios") ?>"
        method="post"
        enctype="multipart/form-data"
    >

    <div class="mb-3">
        <input
            type="hidden"
            class="form-control"
            name="id_usuario"
            id="id_usuario"
            value="<?php echo $tecnico["id_usuario"]; ?>"
        />
    </div>
    

        <div class="card">


            <div class="card-header">
                <div class="row">


                    <div class="col-md-6 align-middle">
                        <br>
                        <h4>ID:<?php echo $tecnico["id_usuario"] ?></h4>
                    </div>

                    <!-- --------------------------------------------- -->
                    <!-- Estado -->
                    <!-- --------------------------------------------- -->
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


                    <!-- --------------------------------------------- -->
                    <!-- Nombres -->
                    <!-- --------------------------------------------- -->
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombres"
                            id="nombres"
                            value="<?php echo $tecnico["nombres"]; ?>"
                        />
                    </div>


                    <!-- --------------------------------------------- -->
                    <!-- Apellidos -->
                    <!-- --------------------------------------------- -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidos"
                            id="apellidos"
                            value="<?php echo $tecnico["apellidos"]; ?>"
                        />
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- --------------------------------------------- -->
                            <!-- Correo -->
                            <!-- --------------------------------------------- -->
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="correo"
                                    id="correo"
                                    value="<?php echo $tecnico["correo"]; ?>"
                                />
                            </div>

                            <!-- --------------------------------------------- -->
                            <!-- Contraseña -->
                            <!-- --------------------------------------------- -->
                            <div class="mb-3">
                                <label for="contrasenia" class="form-label">Contraseña</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="contrasenia"
                                    id="contrasenia"
                                    value="<?php echo $tecnico["contrasenia"]; ?>"
                                />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <!-- Perfil -->
                            <div class="mb-3">
                                <label for="id_perfil" class="form-label">Perfil</label>
                                <select
                                    class="form-select form-select-mb"
                                    name="id_perfil"
                                    id="id_perfil"
                                >
                                    <option value="">Técnico</option>
                                </select>
                            </div>


                            <!-- Oficina -->
                            <div class="mb-3">
                                <label for="id_oficina" class="form-label">Oficina</label>
                                <select
                                    class="form-select form-select-mb"
                                    name="id_oficina"
                                    id="id_oficina"
                                >
                                    <option value="">Tecnologías de la información</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <!-- Botones -->
                    <button type="submit" class="btn btn-success">Guardar</button>

            </div>
        </div>

    </form>
</main>