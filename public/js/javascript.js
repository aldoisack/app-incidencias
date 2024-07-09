
$(document).ready(function () {

    // Comenzar el long polling
    longPolling();
    //sse();

    // Ocultar navbar al hacer clic en un enlace
    $(document).on("click", ".navbar-nav .nav-link", function () {
        $(".navbar-collapse").collapse("hide");
    });

    $(document).on("click", ".navbar .navbar-brand", function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Función para cargar vistas
    $(document).on('click', 'a.load-content', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');

        showLoadingAlert().then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                $('#content').load(url, function () {
                    initCharts(); // Inicializar gráficos si es necesario
                });
            }
        });
    });

    // Función para enviar formularios AJAX
    $(document).on('submit', '.ajax-form', function (e) {
        e.preventDefault();
        var form = $(this);
        var formData = new FormData(this);

        showLoadingAlert().then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        showSuccessAlert(); // Mostrar alerta de éxito
                        $('#content').html(response); // Actualizar contenido dinámico
                    },
                    error: function (xhr, status, error) {
                        console.error('Error en la solicitud AJAX:', error);
                        showErrorAlert(error); // Mostrar alerta de error
                    }
                });
            }
        });
    });

    // Función para recibir nuevos registros
    function longPolling() {
        var id_usuario = document.getElementById('id_usuario').value;
        var nombre_perfil = document.getElementById('nombre_perfil').value;

        var pollingInProgress = false; // Bandera para evitar múltiples instancias de long polling

        function doLongPolling() {
            if (pollingInProgress) return; // Evitar múltiples solicitudes simultáneas
            pollingInProgress = true;

            $.ajax({
                url: 'longpolling', // Ruta al controlador y método en tu proyecto
                method: 'GET',
                success: function (data) {
                    if (data) {
                        var newRecord = JSON.parse(data);

                        // Verificar si el nuevo registro es válido para mostrar
                        if ((nombre_perfil === "admin" || newRecord.id_tecnico == id_usuario) && !newRecord.notificado) {
                            // Marcar el registro como notificado para evitar duplicados
                            newRecord.notificado = true;

                            enviarNotificacion(newRecord);

                            // Actualizar UI o realizar acciones necesarias
                            if ($('#incidencias').length) {
                                // Ejecutar el método actualizarTabla
                                actualizarTabla();
                            } else {
                                console.warn('El div con id "incidencias" no está presente en la página.');
                            }

                        }
                    }
                },
                error: function () {
                    // Manejar errores
                    console.error('Error en la solicitud de long polling');
                },
                complete: function () {
                    pollingInProgress = false; // Reiniciar la bandera después de completar la solicitud
                    setTimeout(doLongPolling, 2000); // Volver a hacer long polling después de 2 segundos
                }
            });
        }

        // Iniciar el long polling inicialmente
        doLongPolling();
    }




    function sse() {
        if (typeof (EventSource) !== "undefined") {
            var sseUrl = $('body').data('sse-url');

            var source = new EventSource(sseUrl);

            source.onmessage = function (event) {
                var data = JSON.parse(event.data);
                console.log("Mensaje recibido: ", data);
                // Aquí puedes actualizar la interfaz de usuario con los datos recibidos
            };

            source.onerror = function (error) {

                console.error("Error en la conexión SSE:", error);

                // Cerrar la conexión y reintentar después de un tiempo
                source.close();
                setTimeout(function () { sse(); }, 5000);

            };
        } else {
            console.log("Lo siento, tu navegador no soporta Server-Sent Events.");
        }

    }

    function actualizarTabla() {
        var url = document.getElementById('url').value;;

        // Realizar la solicitud AJAX para obtener el contenido
        $.ajax({
            url: url, // Ruta a cargar en el div content
            type: 'GET',
            dataType: 'html', // Esperamos contenido HTML
            success: function (response) {
                // Actualizar el contenido del div content
                $('#content').html(response);
            },
            error: function (xhr, status, error) {
                console.error('Error al obtener los datos:', error);
            }
        });
    }

    // Función para enviar la notificación
    function enviarNotificacion(data) {
        if (Notification.permission === 'granted') {
            new Notification(data.problema, {
                body: 'Oficina: ' + data.nombre_oficina,
                icon: '<?= base_url("/path/to/icon.png"); ?>' // Ruta completa al icono de la notificación
            });
        }
    }

    // Función para mostrar SweetAlert de carga
    function showLoadingAlert() {
        return Swal.fire({
            title: "Cargando",
            timer: 500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                const timer = Swal.getPopup().querySelector("b");
                timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                }, 100);
            },
            willClose: () => {
                clearInterval(timerInterval);
            }
        });
    }


    // Función para inicializar gráficos
    function initCharts() {
        if (typeof initChart === 'function') {
            initChart('myChart1');
            initChart('myChart2');
            initChart2('myChart3');
            initChart2('myChart4');
        }
    }


    // Función para mostrar SweetAlert de éxito
    function showSuccessAlert() {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Éxito",
            showConfirmButton: false,
            timer: 1000
        });
    }

    // Función para mostrar SweetAlert de error
    function showErrorAlert(errorMsg) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: `Error en la solicitud AJAX: ${errorMsg}`
        });
    }

});
