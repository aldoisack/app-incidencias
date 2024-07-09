<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_oficinas;

class Controller_oficinas extends Controller
{
    // --------------------------------------------------
    // LISTAR
    // --------------------------------------------------

    /**
     * Método para mostrar la vista y listar 
     * todos los registros de la tabla oficinas
     * @return view Vista y registros
     */
    public function listar()
    {
        $tbl_oficinas = new Model_oficinas();
        $oficinas["oficinas"] = $tbl_oficinas->obtener_oficinas();
        return view("oficinas/view_oficinas_listar", $oficinas);
    }

    // --------------------------------------------------
    // CREAR                                            
    // --------------------------------------------------

    /**
     * Método para mostrar el formulario de registro de oficina
     * @return view Formulario de registro de oficina
     */
    public function crear()
    {
        return view("oficinas/view_oficinas_crear");
    }

    /**
     * Método para registrar una nueva oficina en la base de datos
     * @return view Vista principal del módulo
     */
    public function guardar()
    {
        $tbl_oficinas = new Model_oficinas();
        $registro = [
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
        ];
        $tbl_oficinas->insert($registro);
        return $this->response->redirect(base_url("oficinas/listar"));
    }

    // --------------------------------------------------
    // EDITAR
    // --------------------------------------------------

    /**
     * Método para mostrar la vista con la información de la oficina a editar
     * @param int $id_oficina ID de la oficina a editar
     * @return view Vista con la información de la oficina buscada
     */
    public function editar($id_oficina)
    {
        $tbl_oficinas = new Model_oficinas();
        $oficina["oficina"] = $tbl_oficinas->buscar_oficina($id_oficina);
        return view("oficinas/view_oficinas_editar", $oficina);
    }

    /**
     * Método para actualizar el registro de una oficina
     *  @return view Vista "listar oficinas"
     */
    public function actualizar()
    {
        $datos = [
            "nombre_oficina" => $this->request->getVar("nombre_oficina"),
        ];

        $id_oficina = $this->request->getVar("id_oficina");
        $tbl_oficinas = new Model_oficinas();
        $tbl_oficinas->update($id_oficina, $datos);

        return $this->response->redirect(base_url("oficinas/listar"));
    }
}
