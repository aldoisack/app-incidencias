<!-- Title -->
<h2><b>Oficinas</b></h2>

<div class="card">

    <!-- Crear nueva oficina -->
    <div class="card-header">
        <a class="btn btn-primary load-content" href="<?= base_url("oficinas/crear") ?>" role="button">
            Agregar oficina
        </a>
    </div>

    <div class="card-body">

        <!-- -------------------------------------------------- -->
        <!-- Tabla -->
        <!-- -------------------------------------------------- -->
        <div class="table-responsive">
            <table id="datos" class="table">

                <!-- Encabezado -->
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Oficina</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <!-- Registros -->
                <tbody>

                    <?php $number = 1 ?>
                    <?php foreach ($oficinas as $registro) : ?>

                        <tr class="">
                            <td scope="row"> <?php echo $number ?></td>
                            <td><?= $registro["nombre_oficina"]; ?> </td>
                            <td><a class="btn btn-warning load-content" href="<?= base_url("oficinas/editar/" . $registro["id_oficina"]) ?>" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="white" d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h8.386l-1 1H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h12.77q.23 0 .423-.192t.192-.423v-7.489l1-1v8.489q0 .69-.462 1.153T18.384 20zM10 14v-2.615l8.944-8.944q.166-.166.348-.23t.385-.063q.189 0 .368.064t.326.21L21.483 3.5q.16.166.242.365t.083.4t-.061.382q-.06.18-.226.345L12.52 14zm10.814-9.715l-1.112-1.17zM11 13h1.092l6.666-6.666l-.546-.546l-.61-.584L11 11.806zm7.212-7.211l-.61-.585zl.546.546z" />
                                    </svg>
                                </a></td>
                        </tr>

                        <?php $number += 1 ?>
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