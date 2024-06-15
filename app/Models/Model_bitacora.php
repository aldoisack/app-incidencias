<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_bitacora extends Model
{
    protected $table      = 'bitacora';

    protected $primaryKey = 'id_modificacion';

    protected $allowedFields = [
        "id_usuario",
        "accion",
        "registro_afectado"
    ];

    public function obtener_registros()
    {
        return $this
            ->select("bitacora.*, usuarios.nombres")
            ->join("usuarios", "bitacora.id_usuario = usuarios.id_usuario")
            ->findAll();
    }
}
