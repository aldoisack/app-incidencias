<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        /* Definir la fuente Arial */
        @font-face {
            font-family: 'Arial';
            font-style: normal;
            font-weight: normal;
            src: url('https://fonts.gstatic.com/s/arial/v11/ARIAL.TTF');
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .content {
            margin: 20px;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1>INFORME - TICKET N° <?= $incidencia["id_incidencia"] ?></h1>
        <p><b>ESTADO:</b> <?= $incidencia["nombre_estado"] ?></p>
        <p><b>TÉCNICO:</b> <?= $incidencia["nombres"] ?></p>
        <p><b>OFICINA:</b> <?= $incidencia["nombre_oficina"] ?></p>
        <p><b>CATEGORÍA:</b> <?= $incidencia["nombre_categoria"] ?></p>
        <p><b>INICIO:</b> <?= $incidencia["fecha_inicio"] ?></p>
        <p><b>FIN:</b> <?= $incidencia["fecha_fin"] ?></p>
        <hr>
        <br>
        <p><b>PROBLEMA:</b></p>
        <P><?= $incidencia["problema"] ?></P>
        <br>
        <p><b>DETALLE:</b></p>
        <P><?= $incidencia["detalle"] ?></P>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>