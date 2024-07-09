<?php

namespace App\Controllers;

use App\Models\Model_oficinas;
use App\Models\Model_perfiles;
use App\Models\Model_usuarios;
use CodeIgniter\Controller;

class Controller_login extends Controller
{
    /**
     * Método para mostrar el formulario de login
     * @return view Formulario de login
     */
    public function login()
    {
        $sesion = session();
        $logueado = $sesion->get("logueado");

        if ($logueado) {
            return $this->response->redirect("principal");
        } else {
            return
                view("templates/view_template_head") .
                view("templates/view_template_login") .
                view("templates/view_template_footer");
        }
    }

    /**
     * Método para validar las credenciales del usuario
     * @return view Pantalla principal del sistema
     */
    public function autenticar()
    {
        // Obteniendo datos del formulario
        $usuario     = $this->request->getVar("usuario");
        $contrasenia = $this->request->getVar("contrasenia");

        // Acceso a la tabla
        $tbl_usuarios = new Model_usuarios();

        // Validando credenciales
        $usuario = $tbl_usuarios->verificar($usuario, $contrasenia);

        // Iniciando sesión
        if ($usuario) {

            $sesion = session();

            $datos = [
                "id_usuario"    => $usuario["id_usuario"],
                "nombre_perfil" => $usuario["nombre_perfil"],
                "logueado"      => true,
            ];

            $logueado["logueado"] = 1;

            $sesion->set($datos);

            $tbl_usuarios->update($usuario["id_usuario"], $logueado);

            return $this->response->redirect("principal");
        } else {
            session()->setFlashdata('error', 'Usuario o contraseña incorrectas');
            return $this->response->redirect(base_url());
        }
    }

    public function register()
    {
        $oficinas = new Model_oficinas();
        $datos["oficinas"] = $oficinas->orderBy("id_oficina", "ASC")->findAll();

        return
            view("view_template_head") .
            view("view_template_register", $datos) .
            view("view_template_footer");
    }

    public function guardar()
    {

        /*      
            1. Primero busco el registro con el valor "Empleado"
            2. Luego obtengo su ID
            3. Guardo el ID el los datos a enviar
        */

        $perfiles = new Model_perfiles();
        $registro_empleado = $perfiles->where("nombre_perfil", "Empleado")->first();

        $usuarios = new Model_usuarios();
        $datos = [
            "nombres"   => $this->request->getVar("nombres"),
            "apellidos" => $this->request->getVar("apellidos"),
            "correo" => $this->request->getVar("correo"),
            "contrasenia" => $this->request->getVar("contrasenia"),
            "id_perfil" => $registro_empleado["id_perfil"],
            "id_oficina" => $this->request->getVar("id_oficina"),
            "id_estado" => 1,
        ];

        $usuarios->insert($datos);

        return $this->response->redirect(base_url());
    }

    public function logout()
    {
        $sesion = session();

        $id_usuario = $sesion->get("id_usuario");

        $logueado["logueado"] = 0;

        (new Model_usuarios())->update($id_usuario, $logueado);

        $sesion->destroy();

        return $this->response->redirect(base_url());
    }
}
