<!-- Pantalla de escritorio -->
<div class="d-flex justify-content-center">
    <div class="col-lg-12 d-none d-lg-block" style="width: 75%;">
        <h4><b> Incidencias - Oficinas </b></h4>
        <div class="card">
            <div class="card-body ">
                <canvas id="myChart1"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="col-lg-12 d-none d-lg-block" style="width: 75%;">
        <br>
        <h4><b> Incidencias - Categorias </b></h4>
        <div class="card">
            <div class="card-body ">
                <canvas id="myChart3"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Pantalla de celular -->
<div class="col-12 d-block d-lg-none">
    <h4><b> Incidencias - Oficinas </b></h4>
    <div class="card">
        <div class="card-body">
            <canvas id="myChart2"></canvas>
        </div>
    </div>
</div>

<div class="col-12 d-block d-lg-none">
    <br>
    <h4><b> Incidencias - Categorias </b></h4>
    <div class="card">
        <div class="card-body">
            <canvas id="myChart4"></canvas>
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
                        beginAtZero: true
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
                        beginAtZero: true
                    },
                    y: { // Configura el eje y para las etiquetas
                        beginAtZero: true
                    }
                }
            }
        });
    };
</script>