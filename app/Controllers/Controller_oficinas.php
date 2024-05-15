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
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
            "id_estado" => $this->request->getVar("id_estado"),
        ];
        $oficinas->insert($datos);
        return $this->response->redirect(base_url("oficinas"));
    }
    public function editar($id_oficina)
    {
        $oficinas = new Model_oficinas();
        $datos["oficina"] = $oficinas->where("id_oficina", $id_oficina)->first();
        return
            view("view_template_header") .
            view("view_oficinas_editar", $datos) .
            view("view_template_footer");
    }
    public function actualizar()
    {
        $oficinas = new Model_oficinas();
        $datos = [
            "id_oficina" => $this->request->getVar("id_oficinas"),
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
            "id_estado" => $this->request->getVar("id_estado"),
        ];
        $id_oficina = $this->request->getVar("id_oficina");
        $oficinas->update($id_oficina, $datos);
        return $this->response->redirect(base_url("oficinas"));
    }
}
