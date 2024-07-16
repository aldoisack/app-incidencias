<h2><b>Técnicos</b></h2>

<div class="card">

    <!-- Botón crear -->
    <div class="card-header">
        <a class="btn btn-primary load-content" href="<?= base_url("tecnicos/crear") ?>" role="button">
            Agregar técnico
        </a>
    </div>

    <div class="card-body">
        <!-- -------------------------------------------------- -->
        <!-- Técnicos -->
        <!-- -------------------------------------------------- -->
        <div class="table-responsive">

            <table id="datos" class="table">

                <!-- Encabezado -->
                <thead>
                    <tr>
                        <th scope="col">N °</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <!-- Registros -->
                <tbody>

                    <?php $numero = 1; ?>
                    <?php foreach ($tecnicos as $registro) : ?>
                        <tr class="">
                            <td scope="row"><?php echo $numero; ?></td>
                            <td><?= $registro["nombres"]; ?></td>
                            <td><?= $registro["apellidos"]; ?></td>
                            <td><?= $registro["usuario"]; ?></td>
                            <td style="white-space: nowrap;">
                                <!-- Botón editar -->
                                <a class="btn btn-warning load-content" href="<?= base_url("tecnicos/editar/" . $registro["id_usuario"]) ?>" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="white" d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h8.386l-1 1H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h12.77q.23 0 .423-.192t.192-.423v-7.489l1-1v8.489q0 .69-.462 1.153T18.384 20zM10 14v-2.615l8.944-8.944q.166-.166.348-.23t.385-.063q.189 0 .368.064t.326.21L21.483 3.5q.16.166.242.365t.083.4t-.061.382q-.06.18-.226.345L12.52 14zm10.814-9.715l-1.112-1.17zM11 13h1.092l6.666-6.666l-.546-.546l-.61-.584L11 11.806zm7.212-7.211l-.61-.585zl.546.546z" />
                                    </svg>
                                </a>
                                <!-- Botón restablecer contraseña -->
                                <a class="btn btn-danger load-content" href="<?= base_url("cambiar_contrasenia/" . $registro["id_usuario"]) ?>" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="white" d="M7 13.846q-.77 0-1.308-.538T5.154 12t.538-1.308T7 10.154t1.308.538T8.846 12t-.538 1.308T7 13.846m0 2.885q1.675 0 2.927-.947q1.252-.945 1.608-2.284h2.85l1.069.82q.111.072.229.116t.26.043t.259-.043q.117-.044.229-.136l1.357-1.05l1.212.933q.13.086.28.139q.149.053.291.028t.276-.084t.24-.17l1.442-1.537q.125-.13.178-.267q.052-.136.052-.298t-.055-.295t-.181-.258l-.698-.699q-.13-.13-.28-.186t-.31-.056h-8.7q-.35-1.315-1.594-2.273Q8.698 7.269 7 7.269q-2 0-3.366 1.366Q2.27 10 2.27 12t1.366 3.366T7 16.73" />
                                    </svg>
                                </a>
                            </td>


                        </tr>

                        <?php $numero += 1; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('#datos').DataTable();
    });
</script>