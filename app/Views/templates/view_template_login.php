<br>

<main class="container">

    <div class="row">
        <div class="col"></div>
        <div class="col">

            <!-- -------------------------------------------------- -->
            <!-- Botones -->
            <!-- -------------------------------------------------- -->

            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">

                <!-- Login -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                </li>

                <!-- Registro -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form action="<?php echo base_url("autenticar") ?>" method="post" enctype="multipart/form-data">
                        <!-- -------------------------------------------------- -->
                        <!-- Formulario -->
                        <!-- -------------------------------------------------- -->

                        <!-- Correo -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" />
                        </div>

                        <!-- Contraseña -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="contrasenia">Contraseña</label>
                            <input type="password" name="contrasenia" id="contrasenia" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-primary">Ingresar</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

</main>