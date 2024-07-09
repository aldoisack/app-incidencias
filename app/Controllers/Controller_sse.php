<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Controller_sse extends Controller
{
    public function index()
    {
        // Establecer las cabeceras necesarias para SSE
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        // Mantener la conexión abierta y enviar datos periódicamente
        while (true) {

            // Verificar si la conexión sigue abierta
            if (connection_aborted()) {
                break;
            }

            // Aquí puedes obtener los datos que deseas enviar
            $data = $this->getLatestData();

            // Formatear los datos como un evento SSE
            echo "data: " . json_encode($data) . "\n\n";

            // Enviar los datos al cliente
            ob_flush();
            flush();

            // Pausar por un tiempo antes de enviar el siguiente evento
            sleep(5);
        }
    }

    private function getLatestData()
    {
        // Aquí puedes obtener y devolver los datos actualizados
        return [
            'timestamp' => time(),
            'message' => 'Hola desde el servidor!'
        ];
    }
}
