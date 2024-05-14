<br>
<main class="container">
    <h2>Oficinas</h2>
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="<?php echo base_url("oficinas/crear") ?>" role="button">Agregar oficina</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Oficina</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($oficinas as $registro) {
                        ?>
                            <tr class="">
                                <td scope="row"> <?php echo $number ?></td>
                                <td> <?php echo $registro["nombre_oficina"]; ?> </td>
                                <td>
                                    <a name="" id="" class="btn btn-info" href="<?php echo base_url("oficinas/editar/" . $registro["id_oficina"]) ?>" role="button">Editar</a>
                                    <a name="" id="" class="btn btn-danger" href="<?php echo base_url("oficinas/deshabilitar/" . $registro["id_oficina"]) ?>" role="button">Deshabilitar</a>
                                </td>
                            </tr>
                        <?php
                            $number += 1;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>