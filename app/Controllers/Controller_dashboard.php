<?php

namespace App\Controllers;

use App\Models\Model_usuarios;
use CodeIgniter\Controller;

class Controller_dashboard extends Controller
{
    public function index()
    {
        $sesion = session();
        $id_usuario = $sesion->get("id_usuario");
        $usuario["usuario"] = (new Model_usuarios())->buscar_usuario($id_usuario);
        return view("view_profile", $usuario);
    }
}
