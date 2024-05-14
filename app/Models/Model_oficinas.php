<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_oficinas extends Model
{
    protected $table         = 'oficinas';
    // Uncomment below if you want add primary key
    protected $primaryKey    = 'id_oficina';
    protected $allowedFields = ["nombre_oficina"];
}
