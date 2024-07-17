<!doctype html>
<html lang="en">

<head>

    <title>OTI - Tickets</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* -------------------------------------------------- */
        /* Mostrar y ocultar formularios */
        /* -------------------------------------------------- */
        .form-container {
            display: none;
        }

        .active-form {
            display: block;
        }

        /* -------------------------------------------------- */
        /* Quitar flechas al input de tipo numérico */
        /* -------------------------------------------------- */
        input[type=number] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        /* -------------------------------------------------- */
        /* Estilos para las etiquetas */
        /* -------------------------------------------------- */
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
        }

        .etiqueta.en-proceso {
            background-color: orange;
        }

        .etiqueta.finalizado {
            background-color: green;
        }
    </style>
</head>

<body>

    <header>
        <!-- --------------------------------------------- -->
        <!-- Navbar -->
        <!-- --------------------------------------------- -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand active" href="#"><b>OTI</b></a>

                <!-- Botón -->
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        <!-- Generar -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="boton_registrar_ticket">
                                <b>Generar</b>
                            </a>
                        </li>

                        <!-- Seguimiento -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="boton_seguimiento">
                                <b>Seguimiento</b>
                            </a>
                        </li>

                    </ul>

                    <!-- Iniciar sesión -->
                    <!-- <ul class="navbar-nav ">
                        <a class="nav-link active" href="<?= base_url("/login") ?>">
                            <b>Iniciar sesión</b>
                        </a>
                    </ul> -->

                </div>
            </div>
        </nav>

    </header>

    <br>

    <main class="container">
        <div class="card">

            <!-- --------------------------------------------- -->
            <!-- Formulario "Registrar ticket" -->
            <!-- --------------------------------------------- -->
            <form action="<?= base_url("incidencias/guardar") ?>" method="post" enctype="multipart/form-data" id="form_registrar_ticket" class="active-form">

                <!-- Título -->
                <div class="card-header">
                    <h4>Generar ticket</h4>
                </div>

                <div class="card-body">

                    <div class="row">

                        <!-- Oficinas -->
                        <div class="col-md-6">
                            <div class="mb-3">

                                <label for="id_oficina" class="form-label">Oficina</label>
                                <select class="form-select form-select-mb" name="id_oficina" id="id_oficina" required>

                                    <option selected>--- Select one ---</option>

                                    <?php foreach ($oficinas as $registro) { ?>
                                        <option value="<?= $registro["id_oficina"] ?>">
                                            <?= $registro["nombre_oficina"] ?>
                                        </option>
                                    <?php } ?>

                                </select>

                                <!-- Mensaje de validación para el usuario -->
                                <b><i><small id="mensaje_oficina"></small></i></b>

                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" pattern="[9]{1}[0-9]{8}" class="form-control" name="telefono" id="telefono" />
                            </div>
                        </div>

                    </div>

                    <!-- Problema -->
                    <div class="mb-3">
                        <label for="problema" class="form-label">Problema</label>
                        <textarea class="form-control" name="problema" id="problema" rows="3" required></textarea>
                    </div>

                    <!-- Botones -->
                    <button type="submit" class="btn btn-success">Enviar</button>

                </div>
            </form>

            <!-- --------------------------------------------- -->
            <!-- Formulario "Seguimiento" -->
            <!-- --------------------------------------------- -->
            <form action="<?= base_url("incidencias/seguimiento") ?>" method="post" enctype="multipart/form-data" id="form_seguimiento" class="form-container">

                <!-- Título -->
                <div class="card-header">
                    <h4>Seguimiento</h4>
                </div>

                <div class="card-body">

                    <!-- Ticket ID -->
                    <div class="mb-3">
                        <label for="id_incidencia" class="form-label">Ingresa el N° de ticket</label>
                        <input type="number" class="form-control" name="id_incidencia" id="id_incidencia" />
                    </div>

                    <!-- Botón -->
                    <button type="submit" class="btn btn-success">Buscar</button>

                </div>
            </form>
            <!-- --------------------------------------------- -->
            <!-- Formulario modal -->
            <!-- --------------------------------------------- -->
            <div class="modal fade" id="modalDetalleIncidencia" tabindex="-1" role="dialog" aria-labelledby="modalDetalleIncidenciaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">

                        <br>

                        <div class="modal-body" id="modalBodyDetalleIncidencia">
                            <!-- Aquí se cargará el contenido del detalle de la incidencia -->
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="m-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalCloseFooterButton">Cerrar</button>
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

    <!-- jQuery para validaciones -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // ---------------------------------------------
        // Funcionalidad
        // ---------------------------------------------

        // ### Ocultar navbar ###    
        $(".navbar-nav .nav-link").on("click", function() {
            $(".navbar-collapse").collapse("hide");
        });

        // ### Cambio de formulario ###
        document.getElementById('boton_registrar_ticket').addEventListener('click', function() {
            document.getElementById('form_registrar_ticket').classList.add('active-form');
            document.getElementById('form_seguimiento').classList.remove('active-form');
            // document.getElementById('boton_registrar_ticket').classList.add('active');
            // document.getElementById('boton_seguimiento').classList.remove('active');
        });
        document.getElementById('boton_seguimiento').addEventListener('click', function() {
            document.getElementById('form_registrar_ticket').classList.remove('active-form');
            document.getElementById('form_registrar_ticket').classList.add('form-container');
            document.getElementById('form_seguimiento').classList.add('active-form');
            // document.getElementById('boton_seguimiento').classList.add('active');
            // document.getElementById('boton_registrar_ticket').classList.remove('active');
        });

        // ### Formulario modal ###
        $(document).ready(function() {
            $('#form_seguimiento').submit(function(event) {
                event.preventDefault(); // Evitar el envío normal del formulario

                // Obtener el valor del campo id_incidencia
                var idIncidencia = $('#id_incidencia').val();

                // Realizar la petición AJAX
                $.ajax({
                    url: '<?php echo base_url("incidencias/seguimiento"); ?>',
                    type: 'POST',
                    data: {
                        id_incidencia: idIncidencia
                    },
                    success: function(response) {

                        // Colocar el contenido en el modal
                        $('#modalBodyDetalleIncidencia').html(response);

                        // Deshabilitar los elementos deseados
                        $('#modalBodyDetalleIncidencia #boton_finalizar').remove();
                        $('#modalBodyDetalleIncidencia #boton_guardar').remove();
                        $('#modalBodyDetalleIncidencia #boton_regresar').remove();
                        $('#modalBodyDetalleIncidencia #boton_reporte').remove();
                        $('#modalBodyDetalleIncidencia #boton_nueva_categoria').remove();
                        $('#modalBodyDetalleIncidencia #detalle').addClass('disabled').css('pointer-events', 'none');
                        $('#modalBodyDetalleIncidencia #problema').addClass('disabled').css('pointer-events', 'none');
                        $('#modalBodyDetalleIncidencia #telefono').addClass('disabled').css('pointer-events', 'none');
                        $('#modalBodyDetalleIncidencia #id_oficina').addClass('disabled').css('pointer-events', 'none');
                        $('#modalBodyDetalleIncidencia #id_categoria').addClass('disabled').css('pointer-events', 'none');

                        // Mostrar el modal
                        $('#modalDetalleIncidencia').modal('show');
                    },
                    error: function(xhr, status, error) {
                        // Manejo de errores si es necesario
                        console.error('Error en la petición AJAX: ' + status);
                    }
                });
            });
        });

        // ### Cerrar modal ###
        $('#modalCloseButton').on('click', function() {
            $('#modalDetalleIncidencia').modal('hide');
        });
        $('#modalCloseFooterButton').on('click', function() {
            $('#modalDetalleIncidencia').modal('hide');
        });

        // ---------------------------------------------
        // Validaciones
        // ---------------------------------------------

        // ### Oficina ###
        $(document).ready(function() {

            // Cuando no ha seleccionado oficina
            $('#form_registrar_ticket').on('submit', function(event) {
                const oficinaSelect = $('#id_oficina').val();
                if (oficinaSelect === "--- Select one ---") {
                    event.preventDefault(); // Evita que el formulario se envíe
                    $('#mensaje_oficina').html('¡Selecciona una oficina por favor!').css('color', 'red');
                    return;
                }
            });

            // Quitar el mensaje cuando ya seleccionó oficina
            $('#id_oficina').on('change', function() {
                const oficinaSelect = $(this).val();
                if (oficinaSelect !== "--- Select one ---") {
                    $('#mensaje_oficina').html(''); // Limpia el mensaje de error
                }
            });

        });

        // ---------------------------------------------
        // Sweet alert
        // ---------------------------------------------

        // PD: Este código fue generado con ChatGPT

        // Espera a que el DOM esté cargado
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('form_registrar_ticket');

            form.addEventListener('submit', function(event) {
                // Previene el envío del formulario por defecto
                event.preventDefault();

                // Realiza la petición al servidor utilizando Fetch API
                fetch(form.action, {
                        method: form.method,
                        body: new FormData(form)
                    })
                    .then(response => response.json()) // Parsea la respuesta como JSON
                    .then(data => {
                        if (data.id_ticket) {
                            // Muestra SweetAlert2 con el número obtenido
                            Swal.fire({
                                icon: 'success',
                                title: `Ticket de atención: ${data.id_ticket}`,
                                text: `Consulte el estado de sus ticket en "Seguimiento"`,
                            }).then((result) => {
                                // Limpia los campos del formulario cuando el usuario hace clic en "Ok"
                                if (result.isConfirmed) {
                                    form.reset();
                                }
                            });
                        } else {
                            // Maneja posibles errores
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un problema al generar el ticket.'
                            });
                        }
                    })
                    .catch(error => {
                        // Manejo de errores
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Hubo un problema al generar el ticket.'
                        });
                        console.error('Error:', error);
                    });
            });
        });
    </script>

</body>

</html>