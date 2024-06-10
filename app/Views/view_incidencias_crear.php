<!doctype html>
<html lang="en">

<head>

    <title>Generar nuevo ticket</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>

    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand navbar-dark bg-dark justify-content-center">
            <div class="nav navbar-nav">

                <a class="nav-item nav-link active" href="#" aria-current="page">
                    Registrar ticket
                </a>

                <a class="nav-item nav-link" href="#">
                    Seguimiento de ticket
                </a>

            </div>
        </nav>
    </header>

    <br>

    <main class="container">
        <div class="card">

            <div class="card-header">
                <h4>Reportar nueva incidencia</h4>
            </div>

            <div class="card-body">

                <form action="<?php echo base_url("incidencias/guardar") ?>" method="post" enctype="multipart/form-data">

                    <div class="row">

                        <!-- Oficinas -->
                        <div class="col">
                            <div class="mb-3">
                                <label for="id_oficina" class="form-label">Oficina</label>
                                <select class="form-select form-select-mb" name="id_oficina" id="id_oficina">

                                    <option selected>--- Select one ---</option>

                                    <?php foreach ($oficinas as $registro) { ?>
                                        <option value="<?php echo $registro["id_oficina"] ?>">
                                            <?php echo $registro["nombre_oficina"] ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="col">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" />
                            </div>
                        </div>

                    </div>

                    <!-- Problema -->
                    <div class="mb-3">
                        <label for="problema" class="form-label">Problema</label>
                        <textarea class="form-control" name="problema" id="problema" rows="3"></textarea>
                    </div>

                    <!-- Botones -->
                    <button type="submit" class="btn btn-success">Reportar incidencia</button>

                </form>
            </div>
        </div>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>