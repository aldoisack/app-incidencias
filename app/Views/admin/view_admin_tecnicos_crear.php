<br>

<form
    action="<?php echo base_url("tecnicos/guardar") ?>"
    method="post"
    enctype="multipart/form-data"
>

    <main class="container">
        <div class="card">


            <div class="card-header">
                <div class="row">

                
                    <div class="col-md-6 align-middle">
                        <br>
                        <h4>Nuevo técnico</h4>
                    </div>

                    <!-- -------------------------------------- -->
                    <!-- Estado  -->
                    <!-- -------------------------------------- -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_estado" class="form-label">Estado</label>
                            <select class="form-select form-select-mg" name="id_estado" id="id_estado">
                                <option value="1" selected>Habilitado</option>
                            </select>
                        </div>
                    </div>


                </div>
            </div>


            <div class="card-body">


                <!-- -------------------------------------- -->
                <!-- Nombres -->
                <!-- -------------------------------------- -->
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="helpId" placeholder="" />
                </div>


                <!-- -------------------------------------- -->
                <!-- Apellidos -->
                <!-- -------------------------------------- -->
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="" />
                </div>

                <div class="row">
                    <div class="col-md-6">


                        <!-- -------------------------------------- -->
                        <!-- Correo -->
                        <!-- -------------------------------------- -->
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="" />
                        </div>


                        <!-- -------------------------------------- -->
                        <!-- Contraseña -->
                        <!-- -------------------------------------- -->
                        <div class="mb-3">
                            <label for="contrasenia" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="" />
                        </div>


                    </div>
                    <div class="col-md-6">


                        <!-- -------------------------------------- -->
                        <!-- Perfil -->
                        <!-- -------------------------------------- -->
                        <div class="mb-3">
                            <label for="id_perfil" class="form-label">Perfil</label>
                            <select class="form-select form-select-mb" name="id_perfil" id="id_perfil">
                                <option>Técnico</option>
                            </select>
                        </div>


                        <!-- -------------------------------------- -->
                        <!-- Oficina -->
                        <!-- -------------------------------------- -->
                        <div class="mb-3">
                            <label for="id_oficina" class="form-label">Oficina</label>
                            <select class="form-select form-select-mb" name="id_oficina" id="id_oficina">
                                <option>Tecnologías de la información</option>
                            </select>
                        </div>

                        
                    </div>
                </div>

                <!-- Botones -->
                <button type="submit" class="btn btn-success">Guardar</button>

            </div>
        </div>
    </main>
</form>