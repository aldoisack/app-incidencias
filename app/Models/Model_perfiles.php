<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_perfiles extends Model
{
    protected $table      = 'perfiles';
    protected $primaryKey = 'id_perfil';
    protected $allowedFields = ["nombre_perfil"];

    public function obtener_perfil($id_perfil)
    {
        $perfil = $this->where("id_perfil", $id_perfil)->first();
        return $perfil["nombre_perfil"];
    }

    public function obtener_perfiles()
    {
        return $this->findAll();
    }
}
