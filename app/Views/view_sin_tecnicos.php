<!doctype html>
<html lang="en">

<head>
    <title>OTI - Tickets</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .full-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            max-width: 600px;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container full-screen">
        <div class="text-center content">
            <img class="d-block mx-auto mb-4" src="https://cdn-icons-png.freepik.com/512/7331/7331166.png" alt="" width="75" height="75">
            <h1 class="display-5 fw-bold">Sin técnicos</h1>
            <div class="mx-auto">
                <p class="lead mb-4">
                    En este momento no hay técnicos disponibles
                    <br>
                    Inténtalo más tarde
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a name="" id="reloadButton" class="btn btn-success" href="<?= base_url("ticket") ?>" role="button">Probar de nuevo</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("reloadButton").addEventListener("click", function(event) {
            event.preventDefault();
            let timerInterval;
            Swal.fire({
                title: "Cargando",
                timer: 500,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    timerInterval = setInterval(() => {
                        const timer = Swal.getHtmlContainer().querySelector('b');
                        if (timer) {
                            timer.textContent = Swal.getTimerLeft();
                        }
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    window.location.href = "<?= base_url('ticket') ?>";
                }
            });
        });
    </script>
</body>

</html>