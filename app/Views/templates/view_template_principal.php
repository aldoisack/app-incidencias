<!DOCTYPE html>
<html lang="en">

<head>

    <title>OTI - Tickets</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .etiqueta {
            display: inline-block;
            color: white;
            border: 1px;
            border-radius: 5px;
            font-size: small;
            padding: 0px 5px;
        }

        .etiqueta.nuevo {
            background-color: purple;
            /* Color de fondo para "Nuevo" */
            /* border: 1px solid purple; */
            /* Borde para "Nuevo" */
        }

        .etiqueta.en-proceso {
            background-color: orange;
            /* Color de fondo para "En proceso" */
            /* border: 1px solid #ec971f; */
            /* Borde para "En proceso" */
        }


        .etiqueta.finalizado {
            background-color: green;
            /* Color de fondo para "Finalizado" */
            /* border: 1px solid #4cae4c; */
            /* Borde para "Finalizado" */
        }
    </style>
    <script>
        // Aquí va el código JavaScript para solicitar permiso de notificaciones
        if ('Notification' in window) {
            if (Notification.permission === 'default') {
                Notification.requestPermission().then(function(permission) {
                    if (permission === 'granted') {
                        console.log('Permiso de notificaciones concedido.');
                    } else {
                        console.warn('El usuario ha denegado el permiso de notificaciones.');
                    }
                });
            } else if (Notification.permission === 'granted') {
                console.log('El permiso de notificaciones ya está concedido.');
            } else {
                console.warn('El permiso de notificaciones está denegado.');
            }
        } else {
            console.warn('Este navegador no soporta notificaciones.');
        }
    </script>
</head>


<input type="hidden" id="id_usuario" value="<?= session()->get("id_usuario") ?>" />
<input type="hidden" id="nombre_perfil" value="<?= session()->get("nombre_perfil") ?>" />

<body data-sse-url="<?php echo base_url('sse'); ?>">

    <header>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">

                <!-- Título -->
                <a class="navbar-brand load-content" href="<?= base_url("dashboard") ?>"><b>OTI</b></a>

                <!-- Botón -->
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        <!-- Módulos -->
                        <?php foreach ($modulos as $registro) { ?>
                            <li>
                                <b>
                                    <a class="nav-link active load-content" href="<?= base_url() . $registro["ruta"] ?>">
                                        <?= $registro["nombre_modulo"] ?>
                                    </a>
                                </b>
                            </li>
                        <?php } ?>

                    </ul>

                    <!-- Ticket -->
                    <ul class="navbar-nav ">
                        <a class="nav-link active" target="_blank" href="<?= base_url("ticket") ?>">
                            <b>[Ticket]</b>
                        </a>
                    </ul>

                    <!-- Cerrar sesión -->
                    <ul class="navbar-nav ">
                        <a class="nav-link active" href="<?= base_url("/logout") ?>">
                            <b>Cerrar sesión</b>
                        </a>
                    </ul>

                </div>
            </div>
        </nav>

    </header>


    <br>

    <!-- VISTA DINÁMICA -->
    <main class="container">
        <div id="content">
            <div class="load-content">
                <div class="rounded bg-white">
                    <div class="row">

                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="rounded-circle mt-5" width="150px" src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png">
                                <span class="font-weight-bold"><?= $usuario["usuario"] ?></span>
                            </div>
                        </div>

                        <div class="col-md-6 border-right">
                            <div class="p-3 py-5">


                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right"><b>Perfil</b></h4>
                                </div>

                                <div class="col">
                                    <label class="labels">Nombres</label><input type="text" class="form-control" placeholder="first name" value="<?= $usuario["nombres"] ?>" readonly>
                                </div>
                                <br>
                                <div class="col">
                                    <label class="labels">Apellidos</label><input type="text" class="form-control" value="<?= $usuario["apellidos"] ?>" placeholder="surname" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Funcionalidades -->
    <script src="<?= base_url('js/javascript.js') ?>"></script>

</body>

</html>