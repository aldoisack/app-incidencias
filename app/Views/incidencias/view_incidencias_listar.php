<?php

function obtenerClaseEstado($estado)
{
    switch ($estado) {
        case 'En proceso':
            return 'en-proceso';
        case 'Nuevo':
            return 'nuevo';
        case 'Finalizado':
            return 'finalizado';
        default:
            return 'default';
    }
}

function boton_tomar($estado)
{
    return $estado === "En proceso" ? 'hidden' : '';
}

function boton_ver($estado)
{
    return $estado === "Nuevo" ? 'hidden' : '';
}

$sesion = session();
$nombre_perfil = $sesion->get("nombre_perfil");
$id_usuario = $sesion->get("id_usuario");

?>

<style>
    .hidden {
        display: none;
    }
</style>

<?php if ($incidencias != null) { ?>
    <input type="hidden" id="url" value="<?= base_url("incidencias/listar") ?>" />

    <!-- Vista de escritorio -->
    <div id="incidencias" class="table-responsive col-lg-12 d-none d-lg-block">
        <h2><b>Incidencias</b></h2>
        <div class="card">
            <div class="card-body">
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
                        <?php foreach ($incidencias as $registro) { ?>
                            <tr class="">
                                <td scope="row"> <?= $registro["id_incidencia"]; ?></td>
                                <td> <?= $registro["nombre_oficina"]; ?> </td>
                                <td> <?= $registro["problema"]; ?> </td>
                                <td>
                                    <div class="etiqueta <?= obtenerClaseEstado($registro['nombre_estado']); ?>"><b>● <?= $registro["nombre_estado"]; ?></b></div>
                                </td>
                                <td> <?= $registro["nombres"]; ?> </td>
                                <td>
                                    <?php if ($nombre_perfil == "admin") { ?>
                                        <a class="btn btn-warning load-content" href="<?= base_url("/incidencias/editar/" . $registro["id_incidencia"]); ?>" role="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.4 19.4L22 22m-1.3-7.15a5.85 5.85 0 1 0-11.7 0a5.85 5.85 0 0 0 11.7 0M2 6c.13-1.335.426-2.234 1.096-2.904S4.665 2.131 6 2m0 20c-1.335-.13-2.234-.426-2.904-1.096S2.131 19.335 2 18M22 6c-.13-1.335-.426-2.234-1.096-2.904S19.335 2.131 18 2M2 10v4M14 2h-4" color="white" />
                                            </svg>
                                        </a>
                                    <?php } elseif ($registro["id_tecnico"] == $id_usuario) { ?>
                                        <a class="btn btn-warning load-content <?= boton_ver($registro["nombre_estado"]); ?>" href="<?= base_url("/incidencias/editar/" . $registro["id_incidencia"]); ?>" role="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.4 19.4L22 22m-1.3-7.15a5.85 5.85 0 1 0-11.7 0a5.85 5.85 0 0 0 11.7 0M2 6c.13-1.335.426-2.234 1.096-2.904S4.665 2.131 6 2m0 20c-1.335-.13-2.234-.426-2.904-1.096S2.131 19.335 2 18M22 6c-.13-1.335-.426-2.234-1.096-2.904S19.335 2.131 18 2M2 10v4M14 2h-4" color="white" />
                                            </svg>
                                        </a>
                                        <a class="btn btn-primary load-content <?= boton_tomar($registro["nombre_estado"]); ?>" href="<?= base_url("incidencias/tomar/" . $registro["id_incidencia"]); ?>" role="button" style="background-color: purple;border: 1px solid purple;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 12">
                                                <path fill="white" d="M4.496 1.994A1 1 0 0 0 3 2.862v6.277a1 1 0 0 0 1.496.868l5.492-3.139a1 1 0 0 0 0-1.736z" />
                                            </svg>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Vista de celulares -->
    <?php foreach ($incidencias as $registro) { ?>
        <div class="card col-12 d-block d-lg-none">
            <div class="card-body">







                <!-- Título -->
                <h4 class="card-title"><?= $registro["nombre_oficina"] ?></h4>

                <!-- Problema -->
                <div class="col">
                    <p class="card-text"><?= $registro["problema"] ?></p>
                </div>

                <div class="row justify-content-center align-items-center g-2">

                    <!-- Etiqueta -->
                    <div class="col">
                        <p class="card-text etiqueta <?= obtenerClaseEstado($registro['nombre_estado']); ?>"><b>● <?= $registro["nombre_estado"]; ?></b></p>
                    </div>

                    <!-- Botones -->
                    <div class="col text-end">
                        <?php if ($nombre_perfil == "admin") : ?>
                            <!-- Boton "Ver" solo para el admin -->
                            <a class="btn btn-warning load-content" href="<?= base_url("/incidencias/editar/" . $registro["id_incidencia"]); ?>" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.4 19.4L22 22m-1.3-7.15a5.85 5.85 0 1 0-11.7 0a5.85 5.85 0 0 0 11.7 0M2 6c.13-1.335.426-2.234 1.096-2.904S4.665 2.131 6 2m0 20c-1.335-.13-2.234-.426-2.904-1.096S2.131 19.335 2 18M22 6c-.13-1.335-.426-2.234-1.096-2.904S19.335 2.131 18 2M2 10v4M14 2h-4" color="white" />
                                </svg>
                            </a>

                        <?php elseif ($registro["id_tecnico"] == $id_usuario) : ?>

                            <!-- Botón "Ver" para el técnico -->
                            <a class="btn btn-warning load-content <?= boton_ver($registro["nombre_estado"]); ?>" href="<?= base_url("/incidencias/editar/" . $registro["id_incidencia"]); ?>" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.4 19.4L22 22m-1.3-7.15a5.85 5.85 0 1 0-11.7 0a5.85 5.85 0 0 0 11.7 0M2 6c.13-1.335.426-2.234 1.096-2.904S4.665 2.131 6 2m0 20c-1.335-.13-2.234-.426-2.904-1.096S2.131 19.335 2 18M22 6c-.13-1.335-.426-2.234-1.096-2.904S19.335 2.131 18 2M2 10v4M14 2h-4" color="white" />
                                </svg>
                            </a>

                            <!-- Botón "Tomar" para el técnico -->
                            <a class="btn btn-primary load-content <?= boton_tomar($registro["nombre_estado"]); ?>" href="<?= base_url("incidencias/tomar/" . $registro["id_incidencia"]); ?>" role="button" style="background-color: purple;border: 1px solid purple;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 12">
                                    <path fill="white" d="M4.496 1.994A1 1 0 0 0 3 2.862v6.277a1 1 0 0 0 1.496.868l5.492-3.139a1 1 0 0 0 0-1.736z" />
                                </svg>
                            </a>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php } ?>
<?php } else { ?>
    <div>
        <h1>Por el momento no hay tareas</h1>
        <h1>Bien hecho ;)</h1>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $('#datosTabla').DataTable({
            'order': []
        });
    });
</script>