<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <h4>Nueva área</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url("areas/guardar") ?>" method="post" enctype="multipart/form-data">

                <!-- Nómbre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" />
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </div>

</main>