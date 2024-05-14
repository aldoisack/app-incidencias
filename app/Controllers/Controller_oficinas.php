<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_oficinas;

class Controller_oficinas extends Controller
{
    // Listar
    public function index()
    {
        $oficinas = new Model_oficinas();
        $datos["oficinas"] = $oficinas->orderBy("id_oficina", "ASC")->findAll();
        return
            view("view_template_header") .
            view("view_oficinas_listar", $datos) .
            view("view_template_footer");
    }

    public function crear()
    {
        return
            view("view_template_header") .
            view("view_oficinas_crear") .
            view("view_template_footer");
    }
    public function guardar()
    {
        $oficinas = new Model_oficinas();
        $datos = [
            "nombre_oficina" => $this->request->getVar("nombre_oficina")
        ];
        $oficinas->insert($datos);
        return $this->response->redirect(base_url("oficinas"));
    }
}
