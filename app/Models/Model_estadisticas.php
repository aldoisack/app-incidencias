<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_estadisticas extends Model
{
    protected $table      = '';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function numero_incidencias_oficina()
    {
        return $this->db->table('oficinas')
            ->select("oficinas.nombre_oficina, COUNT(incidencias.id_incidencia) as num_incidencias")
            ->join("incidencias", "oficinas.id_oficina = incidencias.id_oficina", "left")
            ->groupBy("oficinas.nombre_oficina")
            ->get()
            ->getResult();
    }
}
