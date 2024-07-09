<?php

namespace App\Controllers;

use App\Models\Model_asignaciones;
use App\Models\Model_bitacora;
use App\Models\Model_categorias;
use App\Models\Model_oficinas;
use App\Models\Model_incidencias;
use App\Models\Model_estados;

use CodeIgniter\Controller;

use CodeIgniter\I18n\Time;

class Controller_incidencias extends Controller
{
    public $bitacora;
    public function __construct()
    {
        $this->bitacora = new Model_bitacora();
    }

    // ----------------------------------------------------------------
    // LISTAR
    // ----------------------------------------------------------------

    /**
     * Método para mostrar la vista del módulo incidencias
     * con los registros de incidencias pendientes e incidencias nuevas.
     * @return view Vista + registros
     */
    public function listar()
    {
        $sesion = session();

        $id_usuario = $sesion->get("id_usuario");
        $nombre_perfil = $sesion->get("nombre_perfil");

        $tbl_incidencias = new Model_incidencias();
        $incidencias["incidencias"] = $tbl_incidencias->obtener_incidencias($nombre_perfil, $id_usuario);
        return view("incidencias/view_incidencias_listar", $incidencias);
    }

    // --------------------------------------------------
    // CREAR
    // --------------------------------------------------

    /**
     * Método para mostrar el formulario
     * de registro de nuevas incidencias
     * @return view Vista del formulario de registro
     */
    public function crear()
    {
        // Acceso a la tabla 
        $tbl_oficinas = new Model_oficinas();
        $oficinas["oficinas"] = $tbl_oficinas->obtener_oficinas();

        if (!$this->tecnicos_disponibles()) {
            return view("view_sin_tecnicos");
        }

        return view("incidencias/view_incidencias_crear", $oficinas);
    }

    /**
     * Método para registrar una nueva incidencia
     * en la base de datos
     * @return int ID del registro ingresado
     */
    public function guardar()
    {
        // Acceso a la tabla 
        $tbl_estados = new Model_estados();

        $datos = [
            "id_oficina" => $this->request->getVar("id_oficina"),
            "telefono"   => $this->request->getVar("telefono"),
            "problema"   => $this->request->getVar("problema"),
            "id_estado"  => $tbl_estados->obtener_id("Nuevo"),
            "id_tecnico" => (new Model_asignaciones())->asignar_tecnico(),
        ];

        # Guardamos la información
        $tbl_incidencias = new Model_incidencias();
        $tbl_incidencias->insert($datos);

        # Obtenemos el ID del registro ingresado
        $id_incidencia_registrada = $tbl_incidencias->getInsertID();

        // Retornar el ID como JSON
        return $this->response->setJSON(['id_ticket' => $id_incidencia_registrada]);
    }

    // ----------------------------------------------------------------
    // EDITAR
    // ----------------------------------------------------------------

    public function editar($id_incidencia)
    {
        $tbl_incidencias = new Model_incidencias();
        $tbl_oficinas    = new Model_oficinas();
        $tbl_categorias  = new Model_categorias();

        $datos = [
            "incidencia" => $tbl_incidencias->buscar_incidencia($id_incidencia),
            "oficinas"   => $tbl_oficinas->obtener_oficinas(),
            "categorias" => $tbl_categorias->obtener_categorias(),
        ];


        return view("incidencias/view_incidencias_editar", $datos);
    }

    public function actualizar()
    {
        // Obtenemos los datos
        $datos = [
            "id_oficina"   => $this->request->getVar("id_oficina"),
            "telefono"     => $this->request->getVar("telefono"),
            "problema"     => $this->request->getVar("problema"),
            "id_categoria" => $this->request->getVar("id_categoria"),
            "detalle"      => $this->request->getVar("detalle"),
        ];

        // ID de la incidencia a actualizar
        $id_incidencia = $this->request->getVar("id_incidencia");

        // Conxión y registro en la base de datos
        $tbl_incidencias = new Model_incidencias();
        $tbl_incidencias->update($id_incidencia, $datos);

        // Registro de cambios en la bitácora
        $this->bitacora->registrar_modificacion("Modificó", $id_incidencia, "Incidencias");

        // Funcionalidad para la vista "Historial"
        $es_historial = $this->request->getVar("es_historial");
        if ($es_historial) {
            return $this->response->redirect(base_url("historial/listar"));
        }

        // Redirección
        return $this->response->redirect(base_url("incidencias/listar"));
    }

    public function finalizar($id_incidencia)
    {
        $datos = [
            "id_estado" => (new Model_estados())->obtener_id("Finalizado"),
            "fecha_fin" => Time::now()->toDateTimeString()
        ];

        $incidencias = new Model_incidencias();
        $incidencias->update($id_incidencia, $datos);

        $this->bitacora->registrar_modificacion("Finalizó", $id_incidencia, "Incidencias");

        return $this->response->redirect(base_url("incidencias/listar"));
    }

    // ----------------------------------------------------------------
    // EXTRA
    // ----------------------------------------------------------------

    /**
     * Método para obtener el historial de incidencias de usuario (técnico)
     * @return array|null Registros encontrados o null si no lo encuentra
     */


    public function seguimiento()
    {
        $id_incidencia = $this->request->getVar("id_incidencia");

        $tbl_incidencias = new Model_incidencias();

        $datos["incidencia"] = $tbl_incidencias->buscar_incidencia($id_incidencia);
        $datos["oficinas"] = (new Model_oficinas())->obtener_oficinas();
        $datos["categorias"] = (new Model_categorias())->obtener_categorias();

        return view("incidencias/view_incidencias_editar", $datos);
    }

    public function tomar($id_incidencia)
    {
        $tbl_incidencias = new Model_incidencias();
        $tbl_estados     = new Model_estados();

        $id_estado_proceso = $tbl_estados->obtener_id("En proceso");

        $estado = ["id_estado" => $id_estado_proceso];

        $tbl_incidencias->update($id_incidencia, $estado);
        return $this->response->redirect(base_url("incidencias/editar/" . $id_incidencia));
    }

    public function tecnicos_disponibles()
    {
        return (new Model_asignaciones())->asignar_tecnico();
    }
}
