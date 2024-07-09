<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_usuarios extends Model
{

    protected $table      = 'usuarios';

    protected $primaryKey = 'id_usuario';

    protected $allowedFields = [
        "nombres",
        "apellidos",
        "usuario",
        "contrasenia",
        "pregunta_seguridad",
        "respuesta_seguridad",
        "id_perfil",
        "logueado",
    ];

    /**
     * Método para validar las credenciales del usuario
     * @param string $usuario Nombre de usuario
     * @param string $contrasenia Contraseña
     * @return array|null Registro encontrado o null si no lo encuentra
     */
    public function verificar($usuario, $contrasenia)
    {
        return $this
            ->select("usuarios.*, perfiles.nombre_perfil")
            ->join("perfiles", "usuarios.id_perfil = perfiles.id_perfil")
            ->where("usuarios.usuario", $usuario)
            ->where("usuarios.contrasenia", $contrasenia)
            ->first();
    }

    /**
     * Método para obtener todos los técnicos
     * registrados en la base de datos
     * @return array|null Registros encontrados o null si no encuentra
     */
    public function obtener_tecnicos()
    {
        return $this
            ->select("usuarios.*, perfiles.nombre_perfil")
            ->join("perfiles", "usuarios.id_perfil = perfiles.id_perfil")
            ->where("perfiles.nombre_perfil", "Técnico")
            ->findAll();
    }

    /**
     * Método para buscar una usuario por su ID y devolver el registro
     * @param int ID del usuario
     * @return array|null Registro encontrado o null si no lo encuentra
     */
    public function buscar_usuario($id_usuario)
    {
        return $this->where("id_usuario", $id_usuario)->first();
    }

    public function obtener_tecnicos_disponibles()
    {

        $id_perfil = (new Model_perfiles())->obtener_id_perfil("Técnico");

        return $this
            ->where("id_perfil", $id_perfil)
            ->where("logueado", 1)
            ->findAll();
    }
}
