<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_estados extends Model
{
    protected $table      = 'estados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_estado';
    protected $allowedFields = ["nombre_estado"];
}
