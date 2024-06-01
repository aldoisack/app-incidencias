<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_oficinas;

class Controller_oficinas extends Controller
{
    // -----------------------------------
    // Crear
    // -----------------------------------
    
    public function crear()
    {
        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_oficinas_crear") .
            view("templates/view_template_footer");
    }

    public function guardar()
    {
        $oficinas = new Model_oficinas();
        $datos = [
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
            "id_estado"      => $this->request->getVar("id_estado"     ),
        ];
        $oficinas->insert($datos);
        return $this->response->redirect(base_url("oficinas/leer"));
    }



    // -----------------------------------
    // Leer
    // -----------------------------------

    public function leer()
    {
        $oficinas = new Model_oficinas();
        $datos["oficinas"] = $oficinas->orderBy("id_oficina", "ASC")->findAll();
        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_oficinas_leer", $datos) .
            view("templates/view_template_footer");
    }



    // -----------------------------------
    // Actualizar
    // -----------------------------------
    
    public function actualizar($id_oficina)
    {
        $oficinas = new Model_oficinas();

        $datos["oficina"] = $oficinas->where("id_oficina", $id_oficina)->first();

        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_oficinas_actualizar", $datos) .
            view("templates/view_template_footer");
    }

    public function guardar_cambios()
    {
        $datos = [
            "id_oficina"     => $this->request->getVar("id_oficinas"   ),
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
            "id_estado"      => $this->request->getVar("id_estado"     ),
        ];

        // ID del registro a actualizar
        $id_oficina = $this->request->getVar("id_oficina");

        $oficinas = new Model_oficinas();
        $oficinas->update($id_oficina, $datos);

        return $this->response->redirect(base_url("oficinas/leer"));
    }
}
