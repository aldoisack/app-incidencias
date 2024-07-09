<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_bitacora;

class Controller_bitacora extends Controller
{
    public function index()
    {
        $tbl_bitacora = new Model_bitacora();
        $bitacora["registros"] = $tbl_bitacora->obtener_registros();
        return view("bitacora/view_bitacora", $bitacora);
    }

    public function test()
    {
        // Guardar historial de cambios en la bitácora
        $bitacora = [
            // "id_usuario"        => $this->id_usuario,
            "accion"            => "Modificó el registro",
            // "registro_afectado" => $id_incidencia,
            "tabla"             => "incidencias"
        ];
        $registro_bitacora = new Model_bitacora;
        (new Model_bitacora)->insert($bitacora);
    }
}
