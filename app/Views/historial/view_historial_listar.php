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
?>

<!-- Título -->
<h2><b>Historial</b></h2>
<div class="card">
    <div class="card-body">

        <!-- -------------------------------------------------- -->
        <!-- Tabla -->
        <!-- -------------------------------------------------- -->
        <div class="table-responsive">
            <table class="table">

                <!-- Encabezados -->
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

                <!-- Registros -->
                <tbody>
                    <?php foreach ($incidencias as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?= $registro["id_incidencia"]; ?></td>
                            <td><?= $registro["nombre_oficina"]; ?></td>
                            <td><?= $registro["problema"]; ?></td>
                            <td>
                                <div class="etiqueta <?= obtenerClaseEstado($registro['nombre_estado']); ?>"><b>● <?= $registro["nombre_estado"]; ?></b></div>
                            </td>
                            <td><?= $registro["nombres"]; ?></td>
                            <td>
                                <a class="btn btn-warning load-content" href="<?= base_url("/historial/editar/" . $registro["id_incidencia"]); ?>" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.4 19.4L22 22m-1.3-7.15a5.85 5.85 0 1 0-11.7 0a5.85 5.85 0 0 0 11.7 0M2 6c.13-1.335.426-2.234 1.096-2.904S4.665 2.131 6 2m0 20c-1.335-.13-2.234-.426-2.904-1.096S2.131 19.335 2 18M22 6c-.13-1.335-.426-2.234-1.096-2.904S19.335 2.131 18 2M2 10v4M14 2h-4" color="white" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>