<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_areas extends Model
{
    protected $table         = 'areas';
    // Uncomment below if you want add primary key
    protected $primaryKey    = 'id_area';
    protected $allowedFields = ["nombre_area"];
}
