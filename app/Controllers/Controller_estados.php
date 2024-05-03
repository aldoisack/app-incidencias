<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_estados;

class Controller_estados extends Controller
{
    public function index()
    {
        $estados = new Model_estados();
        $datos["estados"] = $estados->orderBy("id_estado", "ASC")->findAll();
        return
            view("view_template_header") .
            view("view_estados_listar", $datos) .
            view("view_template_footer");
    }

    public function crear()
    {
        return
            view("view_template_header") .
            view("view_estados_crear") .
            view("view_template_footer");
    }

    public function guardar()
    {
        $estados = new Model_estados();
        $datos = [
            "nombre_estado" => $this->request->getVar("nombre_estado")
        ];
        $estados->insert($datos);
        return $this->response->redirect(base_url("estados"));
    }
}
