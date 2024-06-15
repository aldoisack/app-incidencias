<?php

namespace App\Controllers;

use App\Models\Model_asignaciones;
use App\Models\Model_bitacora;
use App\Models\Model_oficinas;
use App\Models\Model_incidencias;
use App\Models\Model_estados;
use App\Models\Model_perfiles;
use App\Models\Model_usuarios;
use CodeIgniter\Controller;
use Models\Model_incidencia;

use CodeIgniter\I18n\Time;

use function PHPSTORM_META\map;

class Controller_incidencias extends Controller
{
    protected $id_usuario, $perfil, $logueado;

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
        $datos = [
            "id_oficina" => $this->request->getVar("id_oficina"),
            "telefono"   => $this->request->getVar("telefono"),
            "problema"   => $this->request->getVar("problema"),
            "id_estado"  => (new Model_estados())->obtener_id("Nuevo"),
            "id_tecnico" => (new Model_asignaciones())->asignar_tecnico(),
        ];

        # Guardamos la información
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
        // $datos["incidencias_pendientes"] = null;
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

    // ----------------------------------------------------------------
    // ACTUALIZAR
    // ----------------------------------------------------------------

    public function actualizar($id_incidencia)
    {
        $datos["incidencia"] = (new Model_incidencias())->obtener_incidencia($id_incidencia);
        $datos["oficinas"] = (new Model_oficinas())->obtener_oficinas();

        echo view("templates/view_template_head");

        switch ($this->perfil) {

            case 'admin':
                echo view("admin/view_admin_header");
                echo view("admin/view_admin_incidencias_actualizar", $datos);
                break;

            case 'tecnico':
                break;
            case 'usuario':
                break;
        }

        echo view("templates/view_template_footer");
    }

    public function guardar_cambios()
    {
        // Obtenemos los datos
        $datos = [
            "id_oficina" => $this->request->getVar("id_oficina"),
            "telefono" => $this->request->getVar("telefono"),
            "problema" => $this->request->getVar("problema"),
            "detalle" => $this->request->getVar("detalle"),
        ];

        // ID de la incidencia a actualizar
        $id_incidencia = $this->request->getVar("id_incidencia");

        // Conxión y registro en la base de datos
        $incidencias = new Model_incidencias();
        $incidencias->update($id_incidencia, $datos);

        // Guardar historial de cambios en la bitácora
        $bitacora = [
            "id_usuario" => $this->id_usuario,
            "accion" => "Modificó el registro",
            "registro_afectado" => $id_incidencia,
        ];
        (new Model_bitacora())->insert($bitacora);

        // Redirección
        return $this->response->redirect(base_url("incidencias/leer"));

        #print_r($datos);
    }

    public function finalizar($id_incidencia)
    {
        ## Cambiar el estado de la incidencia
        ## Guardar el usuario que la finalizó
        ## Guardar la fecha de fin
        $datos = [
            "id_estado" => (new Model_estados())->obtener_id("Finalizado"),
            "fecha_fin" => Time::now()->toDateTimeString()
        ];

        $incidencias = new Model_incidencias();
        $incidencias->update($id_incidencia, $datos);

        return $this->response->redirect(base_url("incidencias/leer"));
        #print_r($datos);
    }

    // ----------------------------------------------------------------
    // EXTRA
    // ----------------------------------------------------------------

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

    public function historial()
    {
        $datos["incidencias"] = (new Model_incidencias())->obtener_incidencias();
        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_incidencias_historial", $datos) .
            view("templates/view_template_footer");
    }
}
