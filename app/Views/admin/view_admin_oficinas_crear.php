<br>

<form action="<?php echo base_url("oficinas/guardar") ?>" method="post" enctype="multipart/form-data">

    <main class="container">
        <div class="card">

        
            <div class="card-header">
                <div class="row">


                    <div class="col-md-6 align-middle">
                        <br>
                        <h4>Nueva oficina</h4>
                    </div>


                    <!-- ------------------------------ -->
                    <!-- Estado -->
                    <!-- ------------------------------ -->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_estado" class="form-label">Estado</label>
                            <select class="form-select form-select-mg" name="id_estado" id="id_estado">
                                <option value="1" selected>Habilitado</option>
                            </select>
                        </div>
                    </div>


                </div>
            </div>

            
            <div class="card-body">


                <!-- ------------------------------ -->
                <!-- Nombre oficina-->
                <!-- ------------------------------ -->

                <div class="mb-3">
                    <label for="nombre_oficina" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_oficina" id="nombre_oficina" aria-describedby="helpId" placeholder="" />
                </div>


                <button type="submit" class="btn btn-success">Guardar</button>


            </div>
        </div>
    </main>
</form>