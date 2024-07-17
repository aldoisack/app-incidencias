<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Controller_sesion extends Controller
{
    public function index()
    {
        $sesion = session();
        $datos = [
            'id_usuario' => $sesion->get('id_usuario'),
            'nombre_perfil' => $sesion->get('nombre_perfil'),
        ];
        return view('vista_sesion', $datos);
    }
}
