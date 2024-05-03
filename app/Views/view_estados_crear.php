<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <h4>Nuevo estado</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url("estados/guardar") ?>" method="post" enctype="multipart/form-data">

                <!-- Nombre -->
                <div class="mb-3">
                    <label for="nombre_estado" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_estado" id="nombre_estado" aria-describedby="helpId" placeholder="" />
                </div>

                <!-- Botones -->
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </div>

</main>