<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_perfiles extends Model
{
    protected $table      = 'perfiles';
    protected $primaryKey = 'id_perfil';
    protected $allowedFields = ["nombre_perfil"];

    public function obtener_id_perfil($nombre_perfil)
    {
        $registro = $this->where("nombre_perfil", $nombre_perfil)->first();
        return $registro["id_perfil"];
    }
}
