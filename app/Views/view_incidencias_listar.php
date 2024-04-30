<br>

<!-- Vista de tabla solo para pantallas de escritorio (utiliza la resolución) -->
<main class="container">
    <div class="table-responsive col-lg-12 d-none d-lg-block">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Área</th>
                    <th scope="col">Problema</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">0001</td>
                    <td>Tesorería</td>
                    <td>No puedo imprimir</td>
                    <td>To do</td>
                    <td>
                        <button type="button" class="btn btn-primary mb-2">Tomar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Vista de tarjetas solo para celulares (utiliza la resolución) -->
    <div class="card col-12 d-block d-lg-none">
        <div class="card-body">
            <h4 class="card-title">Tesorería</h4>
            <p class="card-text">No puedo imprimir</p>
            <div class="row">
                <div class="col">
                    TO DO
                    <br>
                    0001
                </div>
                <div class="col text-end">
                    <button type="button" class="btn btn-primary">Tomar</button>
                </div>
            </div>
        </div>
    </div>

</main>