<?php

namespace App\Controllers;

use App\Models\Model_oficinas;
use App\Models\Model_incidencias;
use App\Models\Model_estados;
use CodeIgniter\Controller;
use Models\Model_incidencia;

class Controller_incidencias extends Controller
{

    // -------------------------
    // Crear
    // -------------------------

    public function crear()
    {
        $oficinas = new Model_oficinas();
        $datos["oficinas"] = $oficinas->orderBy("nombre_oficina", "ASC")->findAll();
        return view("view_incidencias_crear", $datos);
    }

    public function guardar()
    {
        # Obtenemos el registro con valor "Nuevo"
        $estados = new Model_estados();
        $registro_con_valor_Nuevo = $estados->where("nombre_estado", "Nuevo")->first();

        # Extraemos el ID del registro
        $id_estado = $registro_con_valor_Nuevo["id_estado"];

        # Almacenamos los datos
        $datos = [
            "id_oficina" => $this->request->getVar("id_oficina"),
            "telefono" => $this->request->getVar("telefono"),
            "problema" => $this->request->getVar("problema"),
            "id_estado" => $id_estado,
        ];

        # Enviamos la información
        $incidencia = new Model_incidencias();
        $incidencia->insert($datos);

        # Obtenemos el ID del registro ingresado
        $id_ticket = $incidencia->getInsertID();

        return $this->response->redirect(base_url("incidencias/imprimirTicket/" . $id_ticket));
    }

    public function imprimirTicket($id_ticket)
    {
        $datos["id_ticket"] = $id_ticket;
        return view("view_incidencias_imprimir_ticket", $datos);
    }

    // -------------------------
    // Leer
    // -------------------------

    public function leer()
    {
        $sesion = session();

        echo "Esta es la variable: " . $sesion->get("logueado");
        if ($sesion->get("logueado")) {
            echo $sesion->get("logueado");
            return
                view("templates/view_template_head") .
                view("admin/view_admin_header") .
                view("admin/view_admin_incidencias_leer") .
                view("templates/view_template_footer");
        } else {
            echo $sesion->get("logueado");
            // return $this->response->redirect(base_url());            

        }
    }

    // -------------------------
    // Editar
    // -------------------------




}
