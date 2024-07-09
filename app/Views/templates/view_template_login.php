<br>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url('../public/oti.webp');
        /* URL de la imagen de fondo */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Negro con 50% de opacidad */
    }

    .card {
        background-color: rgba(255, 255, 255, 0.9);
        /* Fondo blanco semi-transparente */
    }
</style>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">

                    <!-- Pestañas -->
                    <ul class="nav nav-tabs justify-content-center mb-3" id="myTab" role="tablist">

                        <!-- Log in -->
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Log in</button>
                        </li> -->

                        <!-- Registro -->
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Registro</button>
                        </li> -->

                    </ul>

                    <!-- Contenido de las pestañas -->
                    <div class="tab-content" id="myTabContent">

                        <!-- Log in -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form action="<?= base_url("autenticar") ?>" method="post">

                                <!-- Mostrar mensaje de error -->
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-danger" role="alert" id="errorMessage">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Usuario -->
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                                </div>

                                <!-- Contraseña -->
                                <div class="mb-3">
                                    <label for="contrasenia" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasenia" id="contrasenia" required>
                                </div>

                                <!-- Botón -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>

                            </form>
                        </div>


                        <!-- Register -->
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form>
                                <div class="mb-3">
                                    <label for="registerEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="registerPassword" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="registerConfirmPassword" required>
                                    <small id="registerPasswordMatchText"></small> <!-- Texto de coincidencia de contraseña -->
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Registro</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- jQuery para la validación de contraseña -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                // Ocultar el mensaje de error después de 5 segundos
                document.addEventListener("DOMContentLoaded", function() {
                    var errorMessage = document.getElementById('errorMessage');
                    if (errorMessage) {
                        setTimeout(function() {
                            errorMessage.style.display = 'none';
                        }, 5000); // 5000 milisegundos = 5 segundos
                    }
                });
            </script>
            <script>
                $(document).ready(function() {

                    // Función para verificar la coincidencia de contraseñas
                    $('#registerPassword, #registerConfirmPassword').on('keyup', function() {
                        var password = $('#registerPassword').val();
                        var confirmPassword = $('#registerConfirmPassword').val();

                        // Verificar si ambos campos no están vacíos
                        if (password !== '' && confirmPassword !== '') {
                            if (password == confirmPassword) {
                                $('#registerPasswordMatchText').html('Las contraseñas coinciden').css('color', 'green');
                            } else {
                                $('#registerPasswordMatchText').html('Las contraseñas no coinciden').css('color', 'red');
                            }
                        } else {

                            // Si algún campo está vacío, limpiar el texto
                            $('#registerPasswordMatchText').empty();
                        }
                    });
                });
            </script>
</main>