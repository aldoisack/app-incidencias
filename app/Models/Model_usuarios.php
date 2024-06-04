<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_usuarios extends Model
{

    protected $table      = 'usuarios';

    protected $primaryKey = 'id_usuario';

    protected $allowedFields = [
        "nombres",
        "apellidos",
        "correo",
        "contrasenia",
        "id_perfil",
        "id_oficina",
        "id_estado"
    ];

    public function verificar($correo, $contrasenia)
    {
        return $this
            ->where("correo", $correo)
            ->where("contrasenia", $contrasenia)
            ->first();
    }
}
