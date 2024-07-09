<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_modulos extends Model
{
    protected $table      = 'modulos';

    protected $primaryKey = 'id_modulos';
    protected $allowedFields = ['nombre_modulo'];

    public function obtener_modulos_del($usuario)
    {
        return $this
            ->select('modulos.nombre_modulo, modulos.ruta')
            ->join('accesos', 'modulos.id_modulo = accesos.id_modulo')
            ->join('perfiles', 'accesos.id_perfil = perfiles.id_perfil')
            ->join('usuarios', 'perfiles.id_perfil = usuarios.id_perfil')
            ->where('usuarios.id_usuario', $usuario)
            ->get()
            ->getResultArray();
    }
}
