<?php

namespace App\Controllers;

use App\Models\Model_asignaciones;
use App\Models\Model_oficinas;
use App\Models\Model_incidencias;
use App\Models\Model_estados;
use App\Models\Model_perfiles;
use App\Models\Model_usuarios;
use CodeIgniter\Controller;
use Models\Model_incidencia;

class Controller_incidencias extends Controller
{
    public $id_usuario, $perfil, $logueado;

    public function __construct()
    {
        $this->validar_sesion();
    }

    // ----------------------------------------------------------------
    // CREAR
    // ----------------------------------------------------------------

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

    // ----------------------------------------------------------------
    // LEER
    // ----------------------------------------------------------------

    public function leer()
    {
        $datos["incidencias_pendientes"] = (new Model_incidencias())->obtener_incidencias_pendientes();
        $datos["incidencias_nuevas"]     = (new Model_incidencias())->obtener_incidencias_nuevas();

        echo view("templates/view_template_head");

        switch ($this->perfil) {

            case 'admin':
                echo view("admin/view_admin_header");
                echo view("admin/view_admin_incidencias_leer", $datos);
                break;

            case 'tecnico':
                break;

            case 'usuario':
                break;
        }

        echo view("templates/view_template_footer");
    }

    // -------------------------
    // Editar
    // -------------------------

    // -------------------------
    // Extras
    // -------------------------

    public function obtener_oficina($id_oficina)
    {
        $oficinas = new Model_oficinas();
        $oficina =  $oficinas->where("id_oficina", $id_oficina)->first();
        $nombre_oficina = $oficina["nombre_oficina"];
        return $nombre_oficina;
    }

    public function validar_sesion()
    {
        $this->id_usuario = session()->get("id_usuario");
        $this->perfil     = session()->get("perfil");
        $this->logueado   = session()->get("logueado");

        $this->response = service("response");

        if (!$this->logueado) {
            return $this->response->redirect(base_url());
        }
    }
}
