<?php

/**
 * Utilizo este método para asignar clases a la etiqueta "Estado"
 * y automáticamente se aplican los estilos para dar apariencia de "Etiqueta"
 * @param string $estado Estado de la incidencia
 * @return class Clase para aplicar estilos
 */
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

<form class="ajax-form" action="<?= base_url("incidencias/actualizar") ?>" method="post">

    <div class="card">
        <div class="card-header">
            <div class="row">

                <!-- ID -->
                <h4><b>Ticket: <?= $incidencia["id_incidencia"]; ?></b></h4>
                <input type="hidden" name="id_incidencia" id="id_incidencia" value="<?= $incidencia["id_incidencia"]; ?>" />

                <div class="row">

                    <!-- Estado -->
                    <div class="col-md-3">
                        <div class="etiqueta <?= obtenerClaseEstado($incidencia['nombre_estado']); ?>"><b>● <?= $incidencia["nombre_estado"]; ?></b></div>
                    </div>

                    <!-- Técnico -->
                    <div class="col-md-3">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="black" d="M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13t3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20zm2-2h12v-.8q0-.275-.137-.5t-.363-.35q-1.35-.675-2.725-1.012T12 15t-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2zm6-8q.825 0 1.413-.587T14 8t-.587-1.412T12 6t-1.412.588T10 8t.588 1.413T12 10m0 8" />
                            </svg>
                            <?= $incidencia["nombres"]; ?>
                        </div>
                    </div>

                    <!-- Tiempo de inicio -->
                    <div class="col-md-3">
                        <div>
                            <!-- Calendario -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
                                <path fill="black" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
                            </svg>
                            <?= date("d/m/Y", strtotime($incidencia["fecha_inicio"])) ?>
                            <!-- Hora -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="black" d="M15 3H9V1h6zm-4 11h2V8h-2zm8-1c.7 0 1.36.13 2 .35V13c0-2.12-.74-4.07-1.97-5.61l1.42-1.42c-.45-.51-.9-.97-1.41-1.41L17.62 6c-1.55-1.26-3.5-2-5.62-2a9 9 0 0 0 0 18c.59 0 1.16-.06 1.71-.17c-.31-.58-.53-1.23-.63-1.92c-.36.05-.71.09-1.08.09c-3.87 0-7-3.13-7-7s3.13-7 7-7s7 3.13 7 7m-2 3v6l5-3z" />
                            </svg>
                            <?= date("H:i", strtotime($incidencia["fecha_inicio"])) ?>
                        </div>
                    </div>

                    <!-- Tiempo de fin -->
                    <div class="col-md-3">
                        <div>
                            <!-- Calendario -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
                                <path fill="black" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
                            </svg>
                            <?= ($incidencia["fecha_fin"] == null) ? '---' : date("d/m/Y", strtotime($incidencia["fecha_fin"])) ?>
                            <!-- Hora -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                                <g fill="none" stroke="black" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c9.389 0 17-7.611 17-17s-7.611-17-17-17S7 17.611 7 27s7.611 17 17 17Z" />
                                    <path stroke-linecap="round" d="M18 4h12m-6 15v8m8 0h-8m0-23v4" />
                                </g>
                            </svg>
                            <?= ($incidencia["fecha_fin"] == null) ? '---' : date("H:i", strtotime($incidencia["fecha_fin"])) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">

                <!-- Oficinas -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="id_oficina" class="form-label">Oficina</label>
                        <select class="form-select form-select-mb" name="id_oficina" id="id_oficina">
                            <?php foreach ($oficinas as $registro) : ?>
                                <option value="<?= $registro["id_oficina"] ?>" <?= ($registro["id_oficina"] == $incidencia["id_oficina"]) ? "selected" : "" ?>>
                                    <?= $registro["nombre_oficina"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <!-- Teléfono -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $incidencia["telefono"]; ?>" />
                    </div>
                </div>

            </div>
            <div class="row">

                <!-- Problema -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="problema" class="form-label">Problema</label>
                        <input type="text" class="form-control" name="problema" id="problema" value="<?= $incidencia["problema"]; ?>" />
                    </div>
                </div>

                <!-- Categoría -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="id_categoria" class="form-label">Categoría</label>
                        <div class="inline d-flex">
                            <select class="form-select form-select-mb" name="id_categoria" id="id_categoria" required>
                                <option value=""> -- </option>
                                <?php foreach ($categorias as $registro) : ?>
                                    <option value="<?= $registro["id_categoria"] ?>" <?= ($registro["id_categoria"] == $incidencia["id_categoria"]) ? "selected" : "" ?>>
                                        <?= $registro["nombre_categoria"] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <a class="btn btn-primary mx-3 load-content" href="<?= base_url("categorias/crear/") . $incidencia["id_incidencia"] ?>" role="button">Nueva</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Detalle -->
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalle</label>
                <textarea class="form-control" name="detalle" id="detalle" rows="5"><?= $incidencia["detalle"]; ?></textarea>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between">
                <div>
                    <!-- Guardar -->
                    <button id="boton_guardar" type="submit" class="btn btn-success">Guardar</button>
                    <!-- Regresar -->
                    <a id="boton_regresar" class="btn btn-danger load-content" href="<?= base_url("/incidencias/listar"); ?>" role="button">Regresar</a>
                </div>
                <div>
                    <!-- Finalizar -->
                    <a id="boton_finalizar" class="btn btn-warning load-content" href="<?= base_url("incidencias/finalizar/" . $incidencia["id_incidencia"]) ?>" role="button">Finalizar</a>
                </div>
            </div>

        </div>
    </div>
</form>