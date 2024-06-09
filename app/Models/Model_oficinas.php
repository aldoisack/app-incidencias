<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_oficinas extends Model
{
    protected $table         = 'oficinas';
    protected $primaryKey    = 'id_oficina';
    protected $allowedFields = ["nombre_oficina", "id_estado"];

    public function obtener_oficinas()
    {
        return $this->findAll();
    }
}
