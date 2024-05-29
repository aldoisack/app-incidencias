<br>
<main class="container">
    <h2><b>Técnicos</b></h2>
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="<?php echo base_url("tecnicos/crear") ?>" role="button">Agregar técnico</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N °</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $numero = 1;
                        foreach ($tecnicos as $registro) {
                        ?>
                            <tr class="">
                                <td scope="row"><?php echo $numero; ?></td>
                                <td><?php echo $registro["nombres"]; ?></td>
                                <td><?php echo $registro["apellidos"]; ?></td>
                                <td><?php echo $registro["correo"]; ?></td>
                                <td><?php echo $registro["contrasenia"]; ?></td>
                                <td><?php echo ($registro["id_estado"] == 1) ? "Habilitado" : "Inhabilitado"; ?></td>
                                <td>
                                    <a 
                                        name="" 
                                        id="" 
                                        class="btn btn-info" 
                                        href="<?php echo base_url("tecnicos/editar/" . $registro["id_usuario"]) ?>" 
                                        role="button"
                                    >
                                        Editar
                                    </a>
                                </td>
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