<br>
<main class="container">
    <h2><b>Oficinas</b></h2>
    <div class="card">


        <div class="card-header">
            <a class="btn btn-primary" href="<?php echo base_url("oficinas/crear") ?>" role="button">
                Agregar oficina
            </a>
        </div>


        <div class="card-body">


            <div class="table-responsive">
                <table class="table">


                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Oficina</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>


                    <tbody>

                        <!--  
                            Se itera cada registro encontrado
                            en la base de datos
                            y se imprime como una fila
                        -->

                        <?php
                        $number = 1;
                        foreach ($oficinas as $registro) {
                        ?>


                            <tr class="">
                                <td scope="row"> <?php echo $number ?></td>
                                <td> <?php echo $registro["nombre_oficina"]; ?> </td>
                                <td> <?php echo ($registro["id_estado"] == 1) ? "Habilitado" : "Inhabilitado"; ?> </td>
                                <td>
                                    <a class="btn btn-warning" href="<?php echo base_url("oficinas/actualizar/" . $registro["id_oficina"]) ?>" role="button">
                                        Editar
                                    </a>
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