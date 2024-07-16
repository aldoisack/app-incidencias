<h4><b>Bitácora</b></h4>

<div class="card">
    <div class="card-body">

        <!-- -------------------------------------------------- -->
        <!-- Tabla -->
        <!-- -------------------------------------------------- -->
        <div class="table-responsive">
            <table id="datos" class="table">

                <!-- Encabezados -->
                <thead>
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Acción</th>
                        <th scope="col">Registro afectado</th>
                        <th scope="col">Tabla</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>

                <!-- Registros -->
                <tbody>
                    <?php foreach ($registros as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?= $registro["nombres"] ?></td>
                            <td><?= $registro["accion"] ?></td>
                            <td><?= $registro["registro_afectado"] ?></td>
                            <td><?= $registro["tabla"] ?></td>
                            <td style="white-space: nowrap;">


                                <!-- Calendario -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
                                    <path fill="black" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
                                </svg>
                                <?= date("d/m/Y", strtotime($registro["fecha"])) ?>
                                <br>
                                <!-- Hora -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                                    <g fill="none" stroke="black" stroke-linejoin="round" stroke-width="4">
                                        <path d="M24 44c9.389 0 17-7.611 17-17s-7.611-17-17-17S7 17.611 7 27s7.611 17 17 17Z" />
                                        <path stroke-linecap="round" d="M18 4h12m-6 15v8m8 0h-8m0-23v4" />
                                    </g>
                                </svg>
                                <?= date("H:i", strtotime($registro["fecha"])) ?>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#datos').DataTable({
            'order': []
        });
    });
</script>