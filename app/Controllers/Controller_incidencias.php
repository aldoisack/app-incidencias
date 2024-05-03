<?php

namespace App\Controllers;

use App\Models\Model_areas;
use App\Models\Model_incidencias;
use CodeIgniter\Controller;
use Models\Model_incidencia;

class Controller_incidencias extends Controller
{
    public function index()
    {
        return
            view("view_template_header") .
            view("view_incidencias_listar") .
            view("view_template_footer");
    }
    public function crear()
    {
        $areas = new Model_areas();
        $datos["areas"] = $areas->orderBy("nombre_area", "ASC")->findAll();
        return view("view_incidencias_crear", $datos);
    }
    public function guardar()
    {
        $incidencia = new Model_incidencias();
        $datos = [
            "id_area" => $this->request->getVar("id_area"),
            "problema" => $this->request->getVar("problema"),
        ];
        echo $datos["problema"];
        $incidencia->insert($datos);
    }
}
