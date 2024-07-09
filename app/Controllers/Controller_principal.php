<?php

namespace App\Controllers;

use App\Models\Model_modulos;
use App\Models\Model_usuarios;
use CodeIgniter\Controller;

class Controller_principal extends Controller
{
    public function index()
    {
        // Datos de sesión
        $sesion = session();
        $usuario = $sesion->get("id_usuario");
        $logueado = $sesion->get("logueado");

        // Obteniendo los módulo
        $tbl_modulos = new Model_modulos();
        $datos = [
            "modulos" => $tbl_modulos->obtener_modulos_del($usuario),
            "usuario" => (new Model_usuarios())->buscar_usuario($usuario),
        ];
        if ($logueado) {
            return view("templates/view_template_principal", $datos);
        } else {
            return $this->response->redirect(base_url());
        }
    }
}
