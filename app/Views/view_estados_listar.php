<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="<?php echo base_url("estados/crear") ?>" role="button">Agregar estado</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N °</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $numero = 1;
                        foreach ($estados as $registro) {
                        ?>
                            <tr class="">
                                <td scope="row"><?php echo $numero; ?></td>
                                <td><?php echo $registro["nombre_estado"]; ?></td>
                                <td><a name="" id="" class="btn btn-primary" href="<?php echo base_url("estados/editar/" . $registro["id_estado"]) ?>" role="button">Editar</a></td>
                            </tr>
                        <?php
                            $numero += 1;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</main>