<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_categorias extends Model
{
    protected $table      = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $allowedFields = ["nombre_categoria"];

    public function obtener_categorias()
    {
        return $this->orderBy("nombre_categoria", "ASC")->findAll();
    }

    public function buscar_categoria($id_categoria)
    {
        return $this->where("id_categoria", $id_categoria)->first();
    }
}
