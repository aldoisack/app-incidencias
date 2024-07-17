<?php
// En tu controlador personalizado de sesión (por ejemplo, app/Libraries/CustomSessionHandler.php)
namespace App\Libraries;

use App\Models\Model_usuarios;
use CodeIgniter\Session\Handlers\FileHandler;

class CustomSessionHandler extends FileHandler
{
    // Sobrescribe el método que maneja la expiración de sesiones
    public function gc($maxlifetime)
    {
        $model_usuarios = new Model_usuarios();
        $sesion = session();
        $id_usuario = $sesion->get('id_usuario');
        $datos['logueado'] = 0;
        $model_usuarios->update($id_usuario, $datos);
        return parent::gc($maxlifetime);
    }
}
