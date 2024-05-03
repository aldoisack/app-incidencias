<br>
<main class="container">
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="<?php echo base_url("areas/crear") ?>" role="button">Agregar área</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Área</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($areas as $registro) {
                        ?>
                            <tr class="">
                                <td scope="row"> <?php echo $number ?></td>
                                <td> <?php echo $registro["nombre_area"]; ?> </td>
                                <td> <a name="" id="" class="btn btn-primary" href="<?php echo base_url("areas/editar/" . $registro["id_area"]) ?>" role="button">Editar</a> </td>
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