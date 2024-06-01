<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_perfiles;

class Controller_perfiles extends Controller
{
    public function index()
    {
        $perfiles = new Model_perfiles();
        $datos["perfiles"] = $perfiles->orderBy("id_perfil", "ASC")->findAll();
        return
            view("view_template_head") .
            view("view_template_header") .
            view("view_perfiles_listar", $datos) .
            view("view_template_footer");
    }
    public function crear()
    {
        return
            view("view_template_head") .
            view("view_template_header") .
            view("view_perfiles_crear") .
            view("view_template_footer");
    }
    public function guardar()
    {
        $perfiles = new Model_perfiles();
        $datos = [
            "nombre_perfil" => $this->request->getVar("nombre_perfil")
        ];
        $perfiles->insert($datos);
        return $this->response->redirect(base_url("perfiles"));
    }
}
