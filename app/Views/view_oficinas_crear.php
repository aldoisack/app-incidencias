<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <h4>Nueva oficina</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url("oficinas/guardar") ?>" method="post" enctype="multipart/form-data">

                <!-- Nómbre oficina-->
                <div class="mb-3">
                    <label for="nombre_oficina" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_oficina" id="nombre_oficina" aria-describedby="helpId" placeholder="" />
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </div>

</main>