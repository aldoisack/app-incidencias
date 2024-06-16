<br>

<main class="container">

    <!-- ----------------------------------------------------------------------- -->
    <!-- Incidencias pendientes -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_pendientes != null) { ?>

        <h2>Incidencias pendientes</h2>

        <div class="table-responsive col-lg-12 d-none d-lg-block">

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Oficina</th>
                        <th scope="col">Problema</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Técnico</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($incidencias_pendientes as $registro) { ?>
                        <tr class="">

                            <!-- Ticket ID -->
                            <td scope="row"> <?php echo $registro["id_incidencia"]; ?></td>

                            <!-- Oficinas -->
                            <td> <?php echo $registro["nombre_oficina"]; ?> </td>

                            <!-- Problema -->
                            <td> <?php echo $registro["problema"]; ?> </td>

                            <!-- Estado -->
                            <td> <?php echo $registro["nombre_estado"]; ?> </td>

                            <!-- Tecnicos -->
                            <td> <?php echo $registro["nombres"]; ?> </td>

                            <!-- Botones -->
                            <td> <a class="btn btn-primary" href=" <?php echo base_url("/incidencias/actualizar/" . $registro["id_incidencia"]); ?>" role="button">Ver</a> </td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    <?php } ?>

    <!-- ----------------------------------------------------------------------- -->
    <!-- Incidencias nuevas -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_nuevas != null) { ?>

        <!-- Vista de escritorio -->
        <div class="table-responsive col-lg-12 d-none d-lg-block">

            <h2>Incidencias nuevas</h2>

            <table id="datosTabla" class="table">

                <thead>
                    <tr>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Oficina</th>
                        <th scope="col">Problema</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Técnico</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>

        <!-- Vista de celulares -->
        <div class="card col-12 d-block d-lg-none">
            <div class="card-body">

                <h4 class="card-title">Tesorería</h4>

                <div class="col">
                    <p class="card-text">No puedo imprimir</p>
                </div>

                <div class="col text-end">
                    <button type="button" class="btn btn-primary">Tomar</button>
                </div>

            </div>
        </div>

    <?php  } ?>

    <!-- ----------------------------------------------------------------------- -->
    <!-- Sin incidencias -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_nuevas == null && $incidencias_pendientes == null) { ?>
        <div>
            <h1>Por el momento no hay tareas</h1>
            <h1>Bien hecho ;)</h1>
        </div>
    <?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var base_url = '<?php echo base_url(); ?>';
        // Solicitar permisos para notificaciones
        if (Notification.permission !== 'granted') {
            Notification.requestPermission();
        }
        var idsMostrados = [];

        function actualizarTabla() {
            $.ajax({
                url: base_url + 'obtener_incidencias', // La URL del método en tu controlador
                type: 'GET', // Tipo de solicitud (GET, POST, etc.)
                dataType: 'json', // El tipo de datos que se espera recibir (json, xml, text, etc.)
                success: function(response) {
                    // Limpiar las filas actuales de la tabla
                    $('#datosTabla tbody').empty();

                    // Recorrer los datos recibidos y añadir filas a la tabla
                    $.each(response.incidencias_nuevas, function(index, data) {
                        $('#datosTabla tbody').append(
                            '<tr>' +
                            '<td>' + data.id_incidencia + '</td>' +
                            '<td>' + data.nombre_oficina + '</td>' +
                            '<td>' + data.problema + '</td>' +
                            '<td>' + data.nombre_estado + '</td>' +
                            '<td>' + data.nombres + '</td>' +
                            '<td><a class="btn btn-primary" href="' + base_url + '/incidencias/actualizar/' + data.id_incidencia + '" role="button">Ver</a></td>' +
                            '</tr>'
                        );
                        // Enviar notificación si es un nuevo registro
                        if (!idsMostrados.includes(data.id_incidencia)) {
                            enviarNotificacion(data);
                            idsMostrados.push(data.id_incidencia);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error al obtener los datos:', error);
                }
            });
        }
        // Función para enviar notificación
        function enviarNotificacion(data) {
            if (Notification.permission === 'granted') {
                new Notification('Nueva Incidencia', {
                    body: 'ID: ' + data.id_incidencia + ', Oficina: ' + data.nombre_oficina,
                    icon: base_url + '/path/to/icon.png' // Opcional: icono de la notificación
                });
            }
        }
        // Llamar a actualizarTabla cada 5 segundos (5000 milisegundos)
        setInterval(actualizarTabla, 5000);

        // Llamar a actualizarTabla inmediatamente cuando se carga la página
        $(document).ready(function() {
            actualizarTabla();
        });
    </script>



</main>