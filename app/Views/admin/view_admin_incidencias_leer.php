<br>

<main class="container">

    <!-- ----------------------------------------------------------------------- -->
    <!-- Incidencias pendientes -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_pendientes != null) { ?>

        <h2>Incidencias pendientes</h2>

        <div class="table-responsive col-lg-12 d-none d-lg-block">

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
                    <?php foreach ($incidencias_pendientes as $registro) { ?>
                        <tr class="">

                            <!-- Ticket ID -->
                            <td scope="row"> <?php echo $registro["id_incidencia"]; ?></td>

                            <!-- Oficinas -->
                            <td> <?php echo $registro["nombre_oficina"]; ?> </td>

                            <!-- Problema -->
                            <td> <?php echo $registro["problema"]; ?> </td>

                            <!-- Estado -->
                            <td> <?php echo $registro["nombre_estado"]; ?> </td>

                            <!-- Tecnicos -->
                            <td> <?php echo $registro["nombres"]; ?> </td>

                            <!-- Botones -->
                            <td> <a class="btn btn-primary" href=" <?php echo base_url("/incidencias/actualizar/" . $registro["id_incidencia"]); ?>" role="button">Ver</a> </td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    <?php } ?>

    <!-- ----------------------------------------------------------------------- -->
    <!-- Incidencias nuevas -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_nuevas != null) { ?>

        <!-- Vista de escritorio -->
        <div class="table-responsive col-lg-12 d-none d-lg-block">

            <h2>Incidencias nuevas</h2>

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
                    <?php foreach ($incidencias_nuevas as $registro) { ?>
                        <tr class="">

                            <!-- Ticket ID -->
                            <td scope="row"> <?php echo $registro["id_incidencia"]; ?></td>

                            <!-- Oficinas -->
                            <td> <?php echo $registro["nombre_oficina"]; ?> </td>

                            <!-- Problema -->
                            <td> <?php echo $registro["problema"]; ?> </td>

                            <!-- Estado -->
                            <td> <?php echo $registro["nombre_estado"]; ?> </td>

                            <!-- Tecnicos -->
                            <td> <?php echo $registro["nombres"]; ?> </td>

                            <!-- Botones -->
                            <td> <a class="btn btn-primary" href=" <?php echo base_url("/incidencias/actualizar/" . $registro["id_incidencia"]); ?>" role="button">Ver</a> </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Vista de celulares -->
        <div class="card col-12 d-block d-lg-none">
            <div class="card-body">

                <h4 class="card-title">Tesorería</h4>

                <div class="col">
                    <p class="card-text">No puedo imprimir</p>
                </div>

                <div class="col text-end">
                    <button type="button" class="btn btn-primary">Tomar</button>
                </div>

            </div>
        </div>

    <?php  } ?>

    <!-- ----------------------------------------------------------------------- -->
    <!-- Sin incidencias -->
    <!-- ----------------------------------------------------------------------- -->

    <?php if ($incidencias_nuevas == null && $incidencias_pendientes == null) { ?>
        <div>
            <h1>Por el momento no hay tareas</h1>
            <h1>Bien hecho ;)</h1>
        </div>
    <?php } ?>

</main>