<h2><b>Dashboard</b></h2>

<br>

<div class="row">

    <div class="col-12 col-lg px-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                        <h4 class="card-title" style="color: purple;">Nuevas</h4>
                        <p class="card-text" style="font-size: 25px;"><b><?= $incidencias_nuevas ?></b></p>
                    </div>
                    <div class="col text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24">
                            <g fill="none" stroke="#570987" stroke-width="1">
                                <rect width="14" height="17" x="5" y="4" rx="2" />
                                <path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg px-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                        <h4 class="card-title" style="color: orange;">En proceso</h4>
                        <p class="card-text" style="font-size: 25px;"><b><?= $incidencias_en_proceso ?></b></p>
                    </div>
                    <div class="col text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24">
                            <path fill="#ffa500" d="M15 3H9V1h6zm-4 11h2V8h-2zm8-1c.7 0 1.36.13 2 .35V13c0-2.12-.74-4.07-1.97-5.61l1.42-1.42c-.45-.51-.9-.97-1.41-1.41L17.62 6c-1.55-1.26-3.5-2-5.62-2a9 9 0 0 0 0 18c.59 0 1.16-.06 1.71-.17c-.31-.58-.53-1.23-.63-1.92c-.36.05-.71.09-1.08.09c-3.87 0-7-3.13-7-7s3.13-7 7-7s7 3.13 7 7m-2 3v6l5-3z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg px-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                        <h4 class="card-title" style="color: green;">Finalizadas</h4>
                        <p class="card-text" style="font-size: 25px;"><b><?= $incidencias_finalizadas ?></b></p>
                    </div>
                    <div class="col text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 50 50">
                            <path fill="#008000" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                            <path fill="#008000" d="m23 32.4l-8.7-8.7l1.4-1.4l7.3 7.3l11.3-11.3l1.4 1.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<br>

<div class="row justify-content-center g-2">

    <div class="col-12 col-lg mb-3">
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 750px;">
                        <canvas id="myChart1" style="width: 100%;height: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg mb-3">
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px;">
                        <canvas id="myChart2" style="width: 100%;height: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function initChart(chartId) {
        var ctx = document.getElementById(chartId).getContext('2d');
        var chartData = <?= $chart_data; ?>;
        var myChart = new Chart(ctx, {
            type: 'bar', // Sigue siendo 'bar'
            data: chartData,
            options: {
                indexAxis: 'y', // Cambia la orientación del gráfico a horizontal
                scales: {
                    x: { // Configura el eje x para los números
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1 // Asegúrate de que se muestren todos los valores del eje x
                        }
                    },
                    y: { // Configura el eje y para las etiquetas
                        beginAtZero: true
                    }
                }
            }
        });
    };
</script>
<script>
    function initChart2(chartId) {
        var ctx = document.getElementById(chartId).getContext('2d');
        var chartData = <?= $chart_data2; ?>;
        var myChart = new Chart(ctx, {
            type: 'bar', // Sigue siendo 'bar'
            data: chartData,
            options: {
                indexAxis: 'y', // Cambia la orientación del gráfico a horizontal
                scales: {
                    x: { // Configura el eje x para los números
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1 // Asegúrate de que se muestren todos los valores del eje x
                        }
                    },
                    y: { // Configura el eje y para las etiquetas
                        beginAtZero: true
                    }
                }
            }
        });
    };
</script>
<script>
    $(document).ready(function() {
        initCharts();
    });
</script>