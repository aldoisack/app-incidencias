<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_tecnicos;
use App\Models\Model_oficinas;
use App\Models\Model_perfiles;

class Controller_tecnicos extends Controller
{
    public function index()
    {
        $perfiles = new Model_perfiles();
        $perfil = $perfiles->where("nombre_perfil", "Técnico")->first();
        $id_perfil = $perfil["id_perfil"];
        $tecnicos = new Model_tecnicos();
        $datos["tecnicos"] = $tecnicos->where("id_perfil", $id_perfil)->orderBy("id_usuario", "ASC")->findAll();
        return
            view("view_template_head") .
            view("view_template_header") .
            view("view_tecnicos_listar", $datos) .
            view("view_template_footer");
    }

    public function crear()
    {
        $perfiles = new Model_perfiles();
        $oficinas = new Model_oficinas();
        $datos["perfiles"] = $perfiles->orderBy("id_perfil", "ASC")->findAll();
        $datos["oficinas"] = $oficinas->orderBy("id_oficina", "ASC")->findAll();
        return
            view("view_template_head") .
            view("view_template_header") .
            view("view_tecnicos_crear", $datos) .
            view("view_template_footer");
    }

    public function guardar()
    {
        $tecnicos = new Model_tecnicos();
        $datos = [
            "nombres" => $this->request->getVar("nombres"),
            "apellidos" => $this->request->getVar("apellidos"),
            "correo" => $this->request->getVar("correo"),
            "contrasenia" => $this->request->getVar("contrasenia"),
            "id_perfil" => $this->request->getVar("id_perfil"),
            "id_oficina" => $this->request->getVar("id_oficina"),
            "id_estado" => $this->request->getVar("id_estado"),
        ];
        $tecnicos->insert($datos);
        return $this->response->redirect(base_url("tecnicos"));
    }
    public function editar($id_tecnico = null)
    {
        $tecnicos = new Model_tecnicos();
        $datos["tecnico"] = $tecnicos->where("id_tecnico", $id_tecnico)->first();
        return
            view("view_template_head") .
            view("view_template_header") .
            view("view_tecnicos_editar", $datos) .
            view("view_template_footer");
    }
    public function actualizar()
    {
    }
}
