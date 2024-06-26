<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_estados extends Model
{
    protected $table      = 'estados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_estado';
    protected $allowedFields = ["nombre_estado"];

    public function obtener_estados()
    {
        return $this->findAll();
    }

    /**
     * Devulve el registro del "nombre_estado" buscado
     */
    public function obtener_estado($nombre_estado)
    {
        return $this->where("nombre_estado", $nombre_estado)->first();
    }

    /**
     * Devuelve el ID del "nombre_estado" buscado
     */
    public function obtener_id($valor)
    {
        $registro = $this->where("nombre_estado", $valor)->first();
        return $registro["id_estado"];
    }
}
