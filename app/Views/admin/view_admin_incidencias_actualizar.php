<br>

<form action="<?php echo base_url("incidencias/guardar_cambios") ?>" method="post" enctype="multipart/form-data">

    <!-- ----------------------------------- -->
    <!-- ID oficina -->
    <!-- ----------------------------------- -->

    <!--
        Se establece un INPUT oculto
        para enviar el ID
        y saber qué registro actualizar
    -->
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id_oficina" id="id_oficina" value="<?php echo $incidencia["id_incidencia"]; ?>" />
    </div>


    <main class="container">
        <div class="card">


            <div class="card-header">
                <div class="row">


                    <!-- ----------------------------------- -->
                    <!-- Ticket ID -->
                    <!-- ----------------------------------- -->

                    <div class="col-md-6">
                        <h4>Ticket ID: <?php echo $incidencia["id_incidencia"]; ?></h4>
                        <div> <?php echo $incidencia["nombre_estado"] ?> </div>
                        <div> <?php echo $incidencia["nombres"] ?> </div>
                    </div>


                    <!-- ----------------------------------- -->
                    <!-- Hora + Botón finalizar -->
                    <!-- ----------------------------------- -->

                    <div class="col-md-6">
                        <h5>Inicio: <?php echo $incidencia["fecha_inicio"] ?></h5>
                        <h5>Fin : <?php echo $incidencia["fecha_fin"] ?></h5>
                        <a class="btn btn-primary" href="#" role="button">Finalizar</a>
                    </div>


                </div>
            </div>



            <div class="card-body">

                <form action="<?php echo base_url("incidencias/guardar_cambios") ?>" method="post" enctype="multipart/form-data">

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
                        <textarea class="form-control" name="detalle" id="detalle" rows="3"></textarea>
                    </div>

                    <!-- Botones -->
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-primary" href="<?php echo base_url("/incidencias/leer"); ?>" role="button">Regresar</a>


                </form>
            </div>
        </div>


        </div>
    </main>
</form>