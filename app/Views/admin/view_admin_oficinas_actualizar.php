<br>

<form
    action="<?php echo base_url("oficinas/guardar_cambios") ?>"
    method="post"
    enctype="multipart/form-data"
>

    <!-- ----------------------------------- -->
    <!-- ID oficina -->
    <!-- ----------------------------------- -->

    <!--
        Se establece un INPUT oculto
        para enviar el ID
        y saber qué registro actualizar
    -->
    <div class="mb-3">
        <input
            type="hidden"
            class="form-control"
            name="id_oficina"
            id="id_oficina"
            value="<?php echo $oficina["id_oficina"]; ?>"
        />
    </div>


    <main class="container">
        <div class="card">

        
            <div class="card-header">
                <div class="row">


                    <!-- ----------------------------------- -->
                    <!-- Título ID -->
                    <!-- ----------------------------------- -->

                    <div class="col-md-6 align-middle">
                        <br>
                        <h4>ID: <?php echo $oficina["id_oficina"]; ?></h4>
                    </div>


                    <!-- ----------------------------------- -->
                    <!-- Estado -->
                    <!-- ----------------------------------- -->
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_estado" class="form-label">Estado</label>
                            <select class="form-select form-select-mg" name="id_estado" id="id_estado">


                                <option
                                    value="1"
                                    <?php echo ($oficina["id_estado"] == 1) ? "selected" : ""; ?> 
                                >
                                    Habilitado
                                </option>


                                <option
                                    value="2"
                                    <?php echo ($oficina["id_estado"] == 2) ? "selected" : ""; ?>
                                >
                                    Inhabilitado
                                </option>


                            </select>
                        </div>
                    </div>

                    
                </div>
            </div>


            <div class="card-body">


                <!-- ----------------------------------- -->
                <!-- Nombre oficina-->
                <!-- ----------------------------------- -->

                <div class="mb-3">
                    <label for="nombre_oficina" class="form-label">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nombre_oficina"
                        id="nombre_oficina"
                        value="<?php echo $oficina["nombre_oficina"]; ?>"
                    />
                </div>

                
                <button type="submit" class="btn btn-success">Guardar</button>


            </div>


        </div>
    </main>
</form>