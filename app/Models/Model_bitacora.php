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
        "registro_afectado",
        "tabla"
    ];

    /**
     * Método para obtener todos los registros de la bitácora
     * @return array|null Registros encontrados o null si no los encuentra
     */
    public function obtener_registros()
    {
        return $this
            ->select("bitacora.*, usuarios.nombres")
            ->join("usuarios", "bitacora.id_usuario = usuarios.id_usuario")
            ->findAll();
    }

    public function registrar_modificacion($accion, $registro, $tabla)
    {
        $sesion = session();
        $id_usuario = $sesion->get("id_usuario");

        $bitacora = [
            "id_usuario"        => $id_usuario,
            "accion"            => $accion,
            "registro_afectado" => $registro,
            "tabla"             => $tabla
        ];
        $this->insert($bitacora);
    }
}
