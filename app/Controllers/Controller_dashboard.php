<?php

namespace App\Controllers;

use App\Models\Model_usuarios;
use App\Models\Model_estadisticas;
use CodeIgniter\Controller;

class Controller_dashboard extends Controller
{
    public function index()
    {
        $sesion = session();
        $id_usuario = $sesion->get("id_usuario");
        $usuario["usuario"] = (new Model_usuarios())->buscar_usuario($id_usuario);
        return view("view_profile", $usuario);
    }

    public function index2()
    {
        return view('view_template_dashboard');
    }

    public function index3()
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
                    'label' => 'Incidencias por oficina',
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
                    'label' => 'Incidencias por categoría',
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
        return view('view_template_dashboard2', $data);
    }
}
