<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Models\Model_incidencia;

class Controller_incidencias extends Controller
{
    public function index()
    {
        return
            view("view_template_header") .
            view("view_incidencias_listar") .
            view("view_template_footer");
    }
    public function crear()
    {
        return view("view_incidencias_crear");
    }
}
