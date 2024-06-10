<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_incidencias extends Model
{
    protected $table      = 'incidencias';

    protected $primaryKey = 'id_incidencia';

    protected $allowedFields = [
        "id_oficina",
        "telefono",
        "problema",
        "id_estado",
        "id_usuario",
        "id_tecnico"
    ];

    /**
     * Busca una incidencia por su ID
     */
    public function obtener_incidencia($id_incidencia)
    {
        return $this
            ->select("incidencias.*, estados.nombre_estado, usuarios.nombres")
            ->join("estados", "incidencias.id_estado = estados.id_estado")
            ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
            ->where("incidencias.id_incidencia", $id_incidencia)
            ->first();
    }

    public function obtener_incidencias_pendientes()
    {
        $dia_actual = date("Y-m-d");
        return $this
            ->select("incidencias.*, oficinas.nombre_oficina, estados.nombre_estado, usuarios.nombres")
            ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
            ->join("estados", "incidencias.id_estado = estados.id_estado")
            ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
            ->where("estados.nombre_estado !=", "Finalizado")
            ->where("DATE(incidencias.fecha_inicio) !=", $dia_actual)
            ->findAll();
    }

    public function obtener_incidencias_nuevas()
    {
        $dia_actual = date("Y-m-d");
        return $this
            ->select("incidencias.*, oficinas.nombre_oficina, estados.nombre_estado, usuarios.nombres")
            ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
            ->join("estados", "incidencias.id_estado = estados.id_estado")
            ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
            ->where("DATE(incidencias.fecha_inicio)", $dia_actual)
            ->findAll();
    }
}
