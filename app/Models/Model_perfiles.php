<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_perfiles extends Model
{
    protected $table      = 'perfiles';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_perfil';
    protected $allowedFields = ["nombre_perfil"];
}
