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
            ->select("usuarios.*, perfiles.nombre_perfil")
            ->join("perfiles", "usuarios.id_perfil = perfiles.id_perfil")
            ->where("usuarios.correo", $correo)
            ->where("usuarios.contrasenia", $contrasenia)
            ->first();
    }

    public function obtener_tecnicos()
    {
        $perfiles = new Model_perfiles();
        $perfil_tecnico = $perfiles->where("nombre_perfil", "Técnico")->first();
        return $this->where("id_perfil", $perfil_tecnico["id_perfil"])->findAll();
    }
}
