<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_bitacora;

class Controller_bitacora extends Controller
{
    public function index()
    {
        $datos["registros_bitacora"] = (new Model_bitacora())->obtener_registros();
        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_bitacora", $datos) .
            view("templates/view_template_footer");
    }
}
