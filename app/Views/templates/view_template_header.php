<body>
    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">

                <a class="navbar-brand" href="#"><b>OTI</b></a>

                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        <?php foreach ($modulos as $registro) { ?>
                            <li>
                                <b>
                                    <a class="nav-link active" href="<?= base_url() . $registro["ruta"] ?>">
                                        <?= $registro["nombre_modulo"] ?>
                                    </a>
                                </b>
                            </li>
                        <?php } ?>

                    </ul>

                    <!-- Cerrar sesión -->
                    <ul class="navbar-nav ">
                        <a class="nav-link active" href="<?= base_url("/logout") ?>">
                            <b>Cerrar sesión</b>
                        </a>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // ### Ocultar navbar ###    
        $(".navbar-nav .nav-link").on("click", function() {
            $(".navbar-collapse").collapse("hide");
        });
    </script>