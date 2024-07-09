<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_oficinas extends Model
{
    protected $table         = 'oficinas';
    protected $primaryKey    = 'id_oficina';
    protected $allowedFields = ["nombre_oficina", "id_estado"];

    /**
     * Método para obtener todos
     * los registros de la tabla oficinas
     * @return array Array asociativo con todos los registros
     */
    public function obtener_oficinas()
    {
        return $this->orderBy("nombre_oficina", "ASC")->findAll();
    }

    /**
     * Método para buscar una oficina
     * @param int $id_oficina ID de la oficina
     * @return array|null Registro encontrado o null si no lo encuentra
     */
    public function buscar_oficina($id_oficina)
    {
        return $this->where("id_oficina", $id_oficina)->first();
    }
}
