<?php

namespace App\Controllers;

use App\Models\Model_incidencias;
use App\Models\Model_oficinas;
use App\Models\Model_categorias;
use CodeIgniter\Controller;

class Controller_historial extends Controller
{
    public function listar()
    {
        $tbl_incidencias = new Model_incidencias();
        $incidencias["incidencias"] = $tbl_incidencias->historial_incidencias();
        return view("historial/view_historial_listar", $incidencias);
    }

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


        return view("historial/view_historial_editar", $datos);
    }
}
