<form c action="<?= base_url("incidencias/actualizar") ?>" method="post" enctype="multipart/form-data">

    <main class="container">
        <div class="card">

            <div class="card-header">
                <div class="row">


                    <!-- ID -->
                    <div class="col-md-6">
                        <h4> Ticket ID: <?= $incidencia["id_incidencia"]; ?> </h4>
                        <div> Estado : <?= $incidencia["nombre_estado"];  ?> </div>
                        <div> Técnico : <?= $incidencia["nombres"]; ?> </div>
                        <input type="hidden" name="id_incidencia" id="id_incidencia" value="<?= $incidencia["id_incidencia"]; ?>" />
                    </div>

                    <!-- Hora + Botón finalizar -->
                    <div class="col-md-6">
                        <h5>Inicio: <?= $incidencia["fecha_inicio"] ?></h5>
                        <h5>Fin : <?= $incidencia["fecha_fin"] ?></h5>
                        <a id="boton_finalizar" class="btn btn-primary" href="<?= base_url("incidencias/finalizar/" . $incidencia["id_incidencia"]) ?>" role="button">Finalizar</a>
                    </div>

                </div>
            </div>



            <div class="card-body">

                <form action="<?= base_url("incidencias/actualizar") ?>" method="post">

                    <div class="row">

                        <!-- Oficinas -->
                        <div class="col">
                            <div class="mb-3">
                                <label for="id_oficina" class="form-label">Oficina</label>
                                <select class="form-select form-select-mb" name="id_oficina" id="id_oficina">

                                    <?php foreach ($oficinas as $registro) { ?>
                                        <option value="<?php echo $registro["id_oficina"] ?>" <?php echo ($registro["id_oficina"] == $incidencia["id_oficina"]) ? "selected" : "" ?>>
                                            <?php echo $registro["nombre_oficina"] ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="col">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $incidencia["telefono"]; ?>" />
                            </div>
                        </div>

                    </div>

                    <!-- Problema -->
                    <div class="mb-3">
                        <label for="problema" class="form-label">Problema</label>
                        <textarea class="form-control" name="problema" id="problema" rows="3"><?php echo $incidencia["problema"]; ?></textarea>
                    </div>

                    <!-- Detalle -->
                    <div class="mb-3">
                        <label for="detalle" class="form-label">Detalle</label>
                        <textarea class="form-control" name="detalle" id="detalle" rows="3"><?= $incidencia["detalle"]; ?></textarea>
                    </div>

                    <!-- Botones -->
                    <button id="boton_guardar" type="submit" class="btn btn-success">Guardar</button>
                    <a id="boton_regresar" class="btn btn-primary" href="<?php echo base_url("/incidencias/leer"); ?>" role="button">Regresar</a>


                </form>
            </div>
        </div>


        </div>
</form>