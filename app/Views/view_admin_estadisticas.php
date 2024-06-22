<br>
<main class="container">
<?php print_r($chart_data) ?>
    <div style="width: 75%;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var chartData = <?= $chart_data; ?>;

            var myChart = new Chart(ctx, {
                type: 'bar', // Puedes cambiar a 'line', 'pie', 'doughnut', etc.
                data: chartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

</main>