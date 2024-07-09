<?php

namespace App\Controllers;

use App\Controllers\Websocket;

class Controller_websocket extends Websocket
{
    public function onOpen($clientId, $request)
    {
        // Manejar la conexión del cliente
        // Enviar mensaje de bienvenida
    }

    public function onMessage($clientId, $message)
    {
        // Procesar el mensaje recibido del cliente
        // Enviar mensaje a todos los clientes conectados
    }

    public function onClose($clientId)
    {
        // Manejar la desconexión del cliente
        // Enviar mensaje de despedida
    }
}
