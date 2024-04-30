<!doctype html>
<html lang="en">

<head>

    <title>Reportar nueva incidencia - MDC</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>

    <header>
        <!-- place navbar here -->
    </header>

    <br>

    <main class="container">
        <div class="card">

            <div class="card-header">
                <h4>Reportar nueva incidencia</h4>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <!-- Área -->
                    <div class="mb-3">
                        <label for="area" class="form-label">Área</label>
                        <input type="text" class="form-control" name="area" id="area" aria-describedby="helpId" placeholder="" />
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