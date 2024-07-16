<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class Model_incidencias extends Model
{
    protected $table      = 'incidencias';

    protected $primaryKey = 'id_incidencia';

    protected $allowedFields = [
        "id_oficina",
        "telefono",
        "problema",
        "id_categoria",
        "detalle",
        "id_estado",
        "id_usuario",
        "id_tecnico",
        "fecha_fin"
    ];

    /**
     * Método para listar todas las incidencias que el técnico ha finalizado.
     * El el caso de admin se muestran todas las incidencias finalizadas 
     * @return array|null Registros encontrados o null si no encuentra
     */
    public function historial_incidencias()
    {
        // Datos de sesión
        $sesion = session();
        $id_usuario = $sesion->get("id_usuario");
        $perfil = $sesion->get("nombre_perfil");

        if ($perfil == "admin") {
            return $this
                ->select("incidencias.*, oficinas.nombre_oficina, estados.nombre_estado, usuarios.nombres")
                ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
                ->join("estados", "incidencias.id_estado = estados.id_estado")
                ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
                ->where("estados.nombre_estado", "Finalizado")
                ->orderBy("id_incidencia", "DESC")
                ->findAll();
        } else {
            return $this
                ->select("incidencias.*, oficinas.nombre_oficina, estados.nombre_estado, usuarios.nombres")
                ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
                ->join("estados", "incidencias.id_estado = estados.id_estado")
                ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
                ->where("estados.nombre_estado", "Finalizado")
                ->where("incidencias.id_tecnico", $id_usuario)
                ->orderBy("id_incidencia", "DESC")
                ->findAll();
        }
    }

    /**
     * Método para buscar una incidencia por su ID
     * @param int $id_incidencia ID de la incidencia
     * @return array|null Registro encontrado o null si no encuentra
     */
    public function buscar_incidencia($id_incidencia)
    {
        return $this
            ->select("incidencias.*, estados.nombre_estado, usuarios.nombres, oficinas.nombre_oficina, categorias.nombre_categoria")
            ->join("estados", "incidencias.id_estado = estados.id_estado")
            ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
            ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
            ->join("categorias", "incidencias.id_categoria = categorias.id_categoria", "left")
            ->where("incidencias.id_incidencia", $id_incidencia)
            ->first();
    }

    public function obtener_incidencias()
    {
        return $this
            ->select("incidencias.id_incidencia, incidencias.problema, incidencias.id_tecnico, oficinas.nombre_oficina, estados.nombre_estado, usuarios.nombres")
            ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
            ->join("estados", "incidencias.id_estado = estados.id_estado")
            ->join("usuarios", "incidencias.id_tecnico = usuarios.id_usuario")
            ->where("estados.nombre_estado !=", "Finalizado")
            ->orderBy("CASE estados.nombre_estado WHEN 'En proceso' THEN 1 WHEN 'Nuevo' THEN 2 ELSE 3 END", "ASC")
            ->orderBy("id_incidencia", "ASC")
            ->findAll();
    }

    public function obtener_ultima_incidencia()
    {
        return $this
            ->select("incidencias.*, oficinas.nombre_oficina")
            ->join("oficinas", "incidencias.id_oficina = oficinas.id_oficina")
            ->orderBy("id_incidencia", "DESC")
            ->first();
    }

    public function obtener_incidencias_del_admin()
    {
        return $this
            ->select('incidencias.*, usuarios.id_usuario, perfiles.nombre_perfil')
            ->join('usuarios', 'incidencias.id_tecnico = usuarios.id_usuario')
            ->join('perfiles', 'usuarios.id_perfil = perfiles.id_perfil')
            ->where('perfiles.nombre_perfil', 'admin')
            ->findAll();
    }

    public function actualizar_tecnico($id_incidencia, $id_tecnico)
    {
        return $this->update($id_incidencia, ['id_tecnico' => $id_tecnico]);
    }
}
