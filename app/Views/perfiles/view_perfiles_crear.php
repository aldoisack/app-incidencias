<br>
<form action="<?php echo base_url("/perfiles/guardar") ?>" method="post">
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h2><b>Nuevo perfil</b></h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre_perfil" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_perfil" id="nombre_perfil" aria-describedby="helpId" placeholder="" />
                </div>
                <button type="submit" class="btn btn-primary"> Guardar </button>


            </div>
        </div>

    </main>
</form>