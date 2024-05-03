<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_areas;

class Controller_areas extends Controller
{
    // Listar
    public function index()
    {
        $areas = new Model_areas();
        $datos["areas"] = $areas->orderBy("id_area", "ASC")->findAll();
        return
            view("view_template_header") .
            view("view_areas_listar", $datos) .
            view("view_template_footer");
    }

    public function crear()
    {
        return
            view("view_template_header") .
            view("view_areas_crear") .
            view("view_template_footer");
    }
    public function guardar()
    {
        $area = new Model_areas();
        $datos = [
            "nombre_area" => $this->request->getVar("nombre_area")
        ];
        $area->insert($datos);
        return $this->response->redirect(base_url("areas"));
    }
}
