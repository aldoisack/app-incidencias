<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_estadisticas;

class Controller_estadisticas extends Controller
{

    public function index()
    {
        // Aquí puedes obtener tus datos desde la base de datos o cualquier otra fuente.
    $estadisticas = new Model_estadisticas();
    $incidencias_oficina = $estadisticas->numero_incidencias_oficina();

    // Transformar los datos a un formato adecuado para Chart.js
    $labels = array_column($incidencias_oficina, 'nombre_oficina');
    $data_values = array_column($incidencias_oficina, 'num_incidencias');

    $chart_data = [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Número de Incidencias',
                'data' => $data_values,
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1
            ]
        ]
    ];

    $data["chart_data"] = json_encode($chart_data);

    return
        view("templates/view_template_head") .
        view("admin/view_admin_header") .
        view('view_admin_estadisticas', $data) .
        view("templates/view_template_footer");

            $data['chart_data'] = json_encode($this->get_chart_data());
    }

    private function get_chart_data()
    {
        // Datos de ejemplo, normalmente estos vendrían de tu base de datos.
        return [
            'labels' => ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            'datasets' => [
                [
                    'label' => 'Ventas',
                    'data' => [65, 59, 80, 81, 56, 55],
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];
    }
}
