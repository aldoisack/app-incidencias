<?php

namespace App\Controllers;

use App\Models\Model_incidencias;
use CodeIgniter\Controller;

class Controller_longpolling extends Controller
{
    private $estadoArchivo;
    private $tbl_incidencias;

    public function __construct()
    {
        $this->estadoArchivo = WRITEPATH . 'estado_incidencias.txt'; // Archivo para almacenar el estado
        $this->tbl_incidencias = new Model_incidencias();
    }

    public function checkNewRecords()
    {
        $ultimo_id = file_exists($this->estadoArchivo) ? (int) file_get_contents($this->estadoArchivo) : 0;

        while (true) {
            $incidencias = $this->tbl_incidencias->obtener_incidencias();
            $max_id = max(array_column($incidencias, 'id_incidencia'));

            if ($max_id > $ultimo_id) {
                file_put_contents($this->estadoArchivo, $max_id);

                $lastRecord = $this->tbl_incidencias->obtener_ultima_incidencia();
                echo json_encode($lastRecord);
                return;
            }

            usleep(2000000); // Espera 2 segundos (2000000 microsegundos)
        }
    }
}
