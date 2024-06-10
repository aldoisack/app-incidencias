<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_asignaciones extends Model
{
    protected $table      = 'asignaciones';
    protected $primaryKey = 'id_asignacion';
    protected $allowedFields = ["id_usuario"];

    /**
     * Devuelve un técnico
     */
    public function asignar_tecnico()
    {

        $tecnicos = (new Model_usuarios())->obtener_tecnicos();

        $ultima_asignacion = $this->orderBy("id_asignacion", "DESC")->first();

        while (true) {
            $numero_aleatorio = rand(1, 100);
            foreach ($tecnicos as $registro) {
                if ($numero_aleatorio == $registro["id_usuario"] && $numero_aleatorio != $ultima_asignacion["id_asignacion"]) {
                    return $registro["id_usuario"];
                }
            }
        }
    }
}
