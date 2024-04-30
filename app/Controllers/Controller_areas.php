<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_areas;

class Controller_areas extends Controller
{
    // Listar
    public function index()
    {
        return
            view("view_template_header") .
            view("view_areas_listar") .
            view("view_template_footer");
    }

    public function crear()
    {
        return
            view("view_template_header") .
            view("view_areas_crear") .
            view("view_template_footer");
    }
    public function guardar()
    {
    }
}
