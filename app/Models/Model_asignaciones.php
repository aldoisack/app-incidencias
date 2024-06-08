<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_asignaciones extends Model
{
    protected $table      = 'asignaciones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_asignacion';
    protected $allowedFields = ["id_usuario"];

    public function asignar_tecnico()
    {
        $ultima_asignacion = $this->orderBy("id_asignacion", "DESC")->first();
        $datos = [
            "id_usuario" => $ultima_asignacion["id_usuario"] + 1
        ];
        $this->insert($datos);
        return $ultima_asignacion["id_usuario"];
    }
}
