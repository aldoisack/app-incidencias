<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_asignaciones;
use App\Models\Model_incidencias;

class Controller_asignaciones extends Controller
{
    public function index($id_incidencia)
    {
        print_r((new Model_incidencias())->buscar_incidencia($id_incidencia));
    }
}
