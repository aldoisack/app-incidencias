<br>
<br>

<main class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">


            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">


                <!-- Login -->
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="tab-login"
                        data-mdb-pill-init
                        href="<?php echo base_url() ?>"
                        role="tab"
                        aria-controls="pills-login"
                        aria-selected="true"
                    >
                        Login
                    </a>
                </li>


                <!-- Register -->
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link active"
                        id="tab-register"
                        data-mdb-pill-init
                        href="<?php echo base_url("register") ?>"
                        role="tab"
                        aria-controls="pills-register"
                        aria-selected="false"
                    >
                        Registar
                    </a>
                </li>


            </ul>

            <br>

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <form action="<?php echo base_url("register/guardar"); ?>" method="post">


                        <!-- Nombres -->
                        <div class="mb-3">
                            <label class="form-label" for="nombres">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres"/>
                        </div>


                        <!-- Apellidos -->
                        <div class="mb-3">
                            <label class="form-label" for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" />
                        </div>


                        <!-- Oficina -->
                        <div class="mb-3">
                            <label class="form-label" for="id_oficina">Oficina</label>
                            <select
                                class="form-select form-select-mb"
                                name="id_oficina"
                                id="id_oficina"
                            >
                                <option selected>--- Select one ---</option>
                                <?php foreach ($oficinas as $registro) { ?>
                                    <option value="<?php echo $registro["id_oficina"] ?>">
                                        <?php echo $registro["nombre_oficina"] ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        
                        <!-- Correo -->
                        <div class="mb-3">
                            <label class="form-label" for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" />
                        </div>

                        
                        <!-- Contraseña -->
                        <div class="mb-3">
                            <label class="form-label" for="contrasenia">Contraseña</label>
                            <input type="password" nama="contrasenia" id="contrasenia" class="form-control" />
                        </div>

                        
                        <!-- Repita contraseña -->
                        <div class="mb-3">
                            <label class="form-label" for="repita_contrasenia">Repita contraseña</label>
                            <input type="password" name="contrasenia" id="repita_contrasenia" class="form-control" />
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-3">Registrarse</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</main>