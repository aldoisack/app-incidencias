<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Model_perfiles;
use App\Models\Model_usuarios;

class Controller_tecnicos extends Controller
{
    // --------------------------------------------------
    // LISTAR
    // --------------------------------------------------

    /**
     * Método para mostra la vista con todos los registros de la base de datos
     * @return view Vista con registros encontrados
     */
    public function listar()
    {
        $tbl_usuarios = new Model_usuarios();
        $tecnicos["tecnicos"] = $tbl_usuarios->obtener_tecnicos();
        return view("tecnicos/view_tecnicos_listar", $tecnicos);
    }

    // --------------------------------------------------
    // CREAR
    // --------------------------------------------------

    /**
     * Método para mostrar el formulario para registrar un nuevo técnico
     * @return view Formulario de registro nuevo técnico
     */
    public function crear()
    {
        return view("tecnicos/view_tecnicos_crear");
    }

    /**
     * Método para registrar un nuevo técnico
     * @return view Vista "listar" con todos los registros
     */
    public function guardar()
    {
        $tbl_perfiles = new Model_perfiles();
        $id_perfil_tecnico = $tbl_perfiles->obtener_id_perfil("Técnico");

        // Obtenemos los datos
        $registro = [
            "nombres"             => $this->request->getVar("nombres"),
            "apellidos"           => $this->request->getVar("apellidos"),
            "usuario"             => $this->request->getVar("usuario"),
            "contrasenia"         => $this->request->getVar("contrasenia"),
            "pregunta_seguridad"  => $this->request->getVar("pregunta_seguridad"),
            "respuesta_seguridad" => $this->request->getVar("respuesta_seguridad"),
            "id_perfil"           => $id_perfil_tecnico,
        ];

        // Registramos en la base de datos
        $tbl_usuarios = new Model_usuarios();
        $tbl_usuarios->insert($registro);

        return $this->response->redirect(base_url("tecnicos/listar"));
    }

    // --------------------------------------------------
    // EDITAR
    // --------------------------------------------------

    /**
     * Método para mostrar el formulario con la información del técnico a editar
     * @param int ID del técnico
     * @return view Formulario (vista) con la información del técnico
     */
    public function editar($id_tecnico = null)
    {
        // Buscamos el registro a actualizar
        $tbl_usuarios = new Model_usuarios();
        $tecnico["tecnico"] = $tbl_usuarios->buscar_usuario($id_tecnico);

        // Enviamos la información
        return view("tecnicos/view_tecnicos_editar", $tecnico);
    }

    /**
     * Método para actualizar la información de un ténico en la base de datos
     * @return view Vista "listar" con todos los registros
     */
    public function actualizar()
    {
        $datos = [
            "nombres"   => $this->request->getVar("nombres"),
            "apellidos" => $this->request->getVar("apellidos"),
            "usuario"   => $this->request->getVar("usuario"),
        ];

        $id_usuario = $this->request->getVar("id_usuario");

        $tbl_usuarios = new Model_usuarios();
        $tbl_usuarios->update($id_usuario, $datos);

        return $this->response->redirect(base_url("tecnicos/listar"));
    }

    public function cambiar_contrasenia($id_usuario)
    {
        $usuario["usuario"] = (new Model_usuarios())->buscar_usuario($id_usuario);
        return view("view_cambiar_contrasenia", $usuario);
    }

    public function actualizar_contrasenia()
    {
        $contasenia = [
            "contrasenia" => $this->request->getVar("nueva_contrasenia"),
        ];

        $id_usuario = $this->request->getVar("id_usuario");
        (new Model_usuarios)->update($id_usuario, $contasenia);

        return $this->response->redirect(base_url("tecnicos/listar"));
    }
}
