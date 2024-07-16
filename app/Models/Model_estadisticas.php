<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_estadisticas extends Model
{
    protected $table      = '';

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

    public function numero_incidencias_categoria()
    {
        return $this->db->table('categorias')
            ->select("categorias.nombre_categoria, COUNT(incidencias.id_incidencia) as num_incidencias")
            ->join("incidencias", "categorias.id_categoria = incidencias.id_categoria", "left")
            ->groupBy("categorias.nombre_categoria")
            ->get()
            ->getResult();
    }

    public function total_incidencias_nuevas()
    {
        return $this->db->table('incidencias')
            ->select('COUNT(incidencias.id_incidencia) as num_incidencias')
            ->join('estados', 'estados.id_estado = incidencias.id_estado', 'left')
            ->where('estados.nombre_estado', 'Nuevo')
            ->get()
            ->getRow()
            ->num_incidencias;
    }

    public function total_incidencias_en_proceso()
    {
        return $this->db->table('incidencias')
            ->select('COUNT(incidencias.id_incidencia) as num_incidencias')
            ->join('estados', 'estados.id_estado = incidencias.id_estado', 'left')
            ->where('estados.nombre_estado', 'En proceso')
            ->get()
            ->getRow()
            ->num_incidencias;
    }
    public function total_incidencias_finalizadas()
    {
        return $this->db->table('incidencias')
            ->select('COUNT(incidencias.id_incidencia) as num_incidencias')
            ->join('estados', 'estados.id_estado = incidencias.id_estado', 'left')
            ->where('estados.nombre_estado', 'Finalizado')
            ->get()
            ->getRow()
            ->num_incidencias;
    }
}
