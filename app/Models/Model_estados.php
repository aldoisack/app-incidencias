<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_estados extends Model
{
    protected $table      = 'estados';

    protected $primaryKey = 'id_estado';
    protected $allowedFields = ["nombre_estado"];

    /**
     * Método para obtener
     * todos los estados registrados en la tabla
     */
    public function obtener_estados()
    {
        return $this->findAll();
    }

    /**
     * Método para buscar un registro en función del nombre del estado.
     * @param string $nombre_estado Nombre del estado a buscar.
     * @return object|null Registro encontrado o null si no se encuentra ninguno. 
     */
    public function obtener_estado($nombre_estado)
    {
        return $this->where("nombre_estado", $nombre_estado)->first();
    }

    /**
     * Método para obtener el ID de un valor buscado
     * @param string $nombre_estado Nombre del estado a buscar
     * @return int|null ID encontrado o null si no se encuentra ninguno
     */
    public function obtener_id($nombre_estado)
    {
        $registro = $this->where("nombre_estado", $nombre_estado)->first();
        return $registro["id_estado"];
    }
}
