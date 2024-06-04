<?php

namespace App\Controllers;

use App\Models\Model_asignaciones;
use App\Models\Model_oficinas;
use App\Models\Model_incidencias;
use App\Models\Model_estados;
use App\Models\Model_perfiles;
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
        $asignaciones = new Model_asignaciones();

        # Obtenemos el registro con valor "Nuevo"
        $estados = new Model_estados();
        $registro_con_valor_Nuevo = $estados->where("nombre_estado", "Nuevo")->first();

        # Extraemos el ID del registro
        $id_estado = $registro_con_valor_Nuevo["id_estado"];

        # Almacenamos los datos
        $datos = [
            "id_oficina" => $this->request->getVar("id_oficina"),
            "telefono"   => $this->request->getVar("telefono"),
            "problema"   => $this->request->getVar("problema"),
            "id_estado"  => $id_estado,
            "id_usuario" => $asignaciones->asignar_tecnico(),
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
        $perfiles = new Model_perfiles();
        $estados = new Model_estados();
        $incidencias = new Model_incidencias();

        $sesion = session();

        // Datos de la sesión
        $esta_logueado = $sesion->get("logueado");

        if ($esta_logueado) {

            $usuario = $sesion->get("usuario");
            $perfil = $perfiles->obtener_perfil($sesion->get("id_perfil"));

            $datos["incidencias_nuevas"] = $incidencias->obtener_incidencias_nuevas();
            $datos["oficinas"] = (new Model_oficinas())->obtener_oficinas();

            print_r($datos["oficinas"]);
            // Header
            echo view("templates/view_template_head");

            switch ($perfil) {
                case 'admin':
                    // ----------------------------------------------------------
                    // Admin
                    // ----------------------------------------------------------
                    echo view("admin/view_admin_header");
                    echo view("admin/view_admin_incidencias_leer", $datos);
                    break;
                case 'tecnico':
                    // ----------------------------------------------------------
                    // Técnico
                    // ----------------------------------------------------------
                    break;
                case 'usuario':
                    break;
            }

            // Footer
            echo view("templates/view_template_footer");
        } else {
            return $this->response->redirect(base_url());
        }
    }

    // -------------------------
    // Editar
    // -------------------------




}
