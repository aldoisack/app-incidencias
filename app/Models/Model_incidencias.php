<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_incidencias extends Model
{
    protected $table      = 'incidencias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_incidencia';
    protected $allowedFields = [
        "id_oficina",
        "telefono",
        "problema",
        "id_estado",
        "id_usuario"
    ];

    public function obtener_incidencias_pendientes()
    {
    }
    // public function obtener_incidencias_nuevas()
    // {
    //     $fecha_inicio = (string) date('Y-m-d 00:00:00');
    //     $fecha_fin = (string) date('Y-m-d 23:59:59');

    //     $incidencias = $this
    //         ->where("fecha_inicio" >= $fecha_inicio)
    //         ->where("fecha_inicio" <= $fecha_fin)
    //         ->orderBy("fecha_inicio", "ASC")
    //         ->findAll();

    //     return $incidencias;
    // }
    public function obtener_incidencias_nuevas()
    {
        $currentDate = date('Y-m-d');
        return $this->where("DATE(fecha_inicio)", $currentDate)->findAll();
    }
}
