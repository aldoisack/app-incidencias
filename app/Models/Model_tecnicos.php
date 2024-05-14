<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tecnicos extends Model
{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ["nombres", "apellidos", "correo", "contrasenia", "id_perfil", "id_oficina"];
}
