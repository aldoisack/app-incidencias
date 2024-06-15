<br>
<main class="container">
    <h4><b>Bitácora</b></h4>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Acción</th>
                            <th scope="col">Registro afectado</th>
                            <th scope="col">Tabla</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros_bitacora as $registro) { ?>
                            <tr class="">
                                <td scope="row"><?= $registro["nombres"] ?></td>
                                <td><?= $registro["accion"] ?></td>
                                <td><?= $registro["registro_afectado"] ?></td>
                                <td><? $registro["tabla"] ?></td>
                                <td><? $registro["fecha"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>