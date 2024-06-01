<br>
<main class="container">
    <h2><b>Perfiles</b></h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="<?php echo base_url("perfiles/crear") ?>" role="button">Agregar perfil</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $numero = 1;
                        foreach ($perfiles as $registro) { ?>
                            <tr class="">
                                <td scope="row"><?php echo $numero; ?></td>
                                <td><?php echo $registro["nombre_perfil"]; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?php echo base_url("perfiles/editar/" . $registro["id_perfil"]);  ?>" role=" button">Editar</a>
                                </td>
                            </tr>
                        <?php
                            $numero++;
                        } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</main>