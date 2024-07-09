<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_estadisticas;

class Controller_estadisticas extends Controller
{

    public function index()
    {
        // Obteniendo datos
        $obj_estadisticas    = new Model_estadisticas();

        $estadisticas = $obj_estadisticas->numero_incidencias_oficina();
        $estadisticas2 = $obj_estadisticas->numero_incidencias_categoria();

        // Formatear datos -> Chart.js
        $labels      = array_column($estadisticas, 'nombre_oficina');
        $data_values = array_column($estadisticas, 'num_incidencias');

        $labels2      = array_column($estadisticas2, 'nombre_categoria');
        $data_values2 = array_column($estadisticas2, 'num_incidencias');

        $chart_data = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Número de Incidencias por oficina',
                    'data' => $data_values,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        $chart_data2 = [
            'labels' => $labels2,
            'datasets' => [
                [
                    'label' => 'Número de Incidencias por categoría',
                    'data' => $data_values2,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        $data = [
            "chart_data" => json_encode($chart_data),
            "chart_data2" => json_encode($chart_data2)
        ];
        return view('estadisticas/view_estadisticas', $data);
    }
}
