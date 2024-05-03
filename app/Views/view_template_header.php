<!doctype html>
<html lang="en">

<head>

    <title>Incidencias - MDC</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <ul class="nav navbar-nav">

                <!-- Incidencias -->
                <li class="nav-item">
                    <a class="nav-link <?php echo str_starts_with(current_url(), base_url("incidencias")) ? "active" : ""; ?>" href="<?php echo base_url("incidencias") ?>">Incidencias</a>
                </li>

                <!-- Áreas -->
                <li class="nav-item">
                    <a class="nav-link <?php echo str_starts_with(current_url(), base_url("areas")) ? "active" : ""; ?>" href="<?php echo base_url("areas") ?>">Áreas</a>
                </li>

                <!-- Estados -->
                <li class="nav-item">
                    <a class="nav-link <?php echo str_starts_with(current_url(), base_url("estados")) ? "active" : ""; ?>" href="<?php echo base_url("estados") ?>">Estados</a>
                </li>

            </ul>
        </nav>
    </header>