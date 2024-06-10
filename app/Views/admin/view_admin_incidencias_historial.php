<br>
<main class="container">
    <h2><b>Historial</b></h2>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ticket ID</th>
                            <th scope="col">Oficina</th>
                            <th scope="col">Problema</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Técnico</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($incidencias as $registro) { ?>
                            <tr class="">
                                <td scope="row"><?= $registro["id_incidencia"]; ?></td>
                                <td><?= $registro["nombre_oficina"]; ?></td>
                                <td><?= $registro["problema"]; ?></td>
                                <td><?= $registro["nombre_estado"]; ?></td>
                                <td><?= $registro["nombres"]; ?></td>
                                <td><a class="btn btn-primary" href="<?= base_url("incidencias/actualizar/" . $registro["id_incidencia"]); ?>" role="button">Ver</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</main>