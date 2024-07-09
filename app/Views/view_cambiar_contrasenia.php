<form class="ajax-form" action="<?= base_url("actualizar_contrasenia") ?>" method="post">
    <div class="card">
        <div class="card-header">
            <h4><b>Cambiar contraseña</b></h4>
            <input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="<?= $usuario["id_usuario"] ?>" />
        </div>
        <div class="card-body">

            <div class="mb-3">
                <label for="" class="form-label">Nueva contraseña</label>
                <input type="password" class="form-control" name="nueva_contrasenia" id="nueva_contrasenia" requierd />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" name="confirmar_contrasenia" id="confirmar_contrasenia" requierd />
                <small id="password_match" style="color: red;"><b></b></small>
            </div>

            <!-- Botones -->
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger load-content" href="<?= base_url("tecnicos/listar") ?>" role="button">Cancelar</a>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {

        // Función para verificar la coincidencia de contraseñas
        $('#nueva_contrasenia, #confirmar_contrasenia').on('keyup', function() {
            var password = $('#nueva_contrasenia').val();
            var confirmPassword = $('#confirmar_contrasenia').val();

            // Verificar si ambos campos no están vacíos
            if (password !== '' && confirmPassword !== '') {
                if (password == confirmPassword) {
                    $('#password_match').html('Las contraseñas coinciden').css('color', 'green');
                } else {
                    $('#password_match').html('Las contraseñas no coinciden').css('color', 'red');
                }
            } else {

                // Si algún campo está vacío, limpiar el texto
                $('#password_match').empty();
            }
        });
    });
</script>