<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <ul class="nav navbar-nav">

                <!-- Incidencias -->
                <li class="nav-item">
                    <b>
                        <a
                            class="nav-link <?php echo str_starts_with(current_url(), base_url("incidencias")) ? "active" : ""; ?>"
                            href="<?php echo base_url("incidencias/leer") ?>"
                        >
                            Incidencias
                        </a>
                    </b>
                </li>

                <!-- Oficinas -->
                <li class="nav-item">
                    <b>
                        <a
                            class="nav-link
                            <?php
                                echo str_starts_with(current_url(), base_url("oficinas")) ?
                                "active" : "";
                            ?>"
                            href="<?php echo base_url("oficinas/leer") ?>"
                        >
                            Oficinas
                        </a>
                    </b>
                </li>

                <!-- Técnicos -->
                <li class="nav-item">
                    <b>
                        <a
                            class="nav-link
                            <?php
                                echo str_starts_with(current_url(), base_url("tecnicos")) ?
                                "active" : "";
                            ?>"
                            href="<?php echo base_url("tecnicos/leer") ?>"
                        >
                            Técnicos
                        </a>
                    </b>
                </li>

                <!-- Separator -->
                <!-- <div class="nav-link"></div> -->
                <!-- <div class="nav-link" style="color:rgb(155, 138, 113)">●</div> -->
                <!-- <div class="nav-link"></div> -->

            </ul>
        </nav>
    </header>