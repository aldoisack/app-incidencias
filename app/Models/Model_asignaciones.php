<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_asignaciones extends Model
{
    protected $table      = 'asignaciones';
    protected $primaryKey = 'id_asignacion';
    protected $allowedFields = ["id_usuario"];

    public function asignar_tecnico()
    {
        // Obtener la lista de técnicos disponibles
        $tecnicos = (new Model_usuarios())->obtener_tecnicos_disponibles();

        // Verificar si hay técnicos disponibles
        if (empty($tecnicos)) {
            // Manejar el caso cuando no hay técnicos disponibles
            return false;
        }

        // Obtener el último técnico asignado
        $ultima_asignacion = $this->orderBy("id_asignacion", "DESC")->first();

        // Inicializar el índice del siguiente técnico
        $siguiente_tecnico_index = 0;

        if ($ultima_asignacion) {
            // Encontrar el índice del último técnico asignado en la lista de técnicos disponibles
            foreach ($tecnicos as $index => $tecnico) {
                if ($tecnico["id_usuario"] == $ultima_asignacion["id_usuario"]) {
                    // Calcular el índice del siguiente técnico
                    $siguiente_tecnico_index = ($index + 1) % count($tecnicos);
                    break;
                }
            }
        }

        // Obtener el siguiente técnico para asignar
        $siguiente_tecnico = $tecnicos[$siguiente_tecnico_index];

        // Actualizar el registro de la última asignación
        $datos = [
            "id_usuario" => $siguiente_tecnico["id_usuario"]
        ];
        $this->insert($datos);

        // Devolver el ID del técnico asignado
        return $siguiente_tecnico["id_usuario"];
    }
}
