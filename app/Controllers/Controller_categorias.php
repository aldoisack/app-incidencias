<?php

namespace App\Controllers;

use App\Models\Model_categorias;
use CodeIgniter\Controller;

class Controller_categorias extends Controller
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
        $tbl_categorias = new Model_categorias();
        $categorias["categorias"] = $tbl_categorias->obtener_categorias();
        return view("categorias/view_categorias_listar", $categorias);
    }

    // --------------------------------------------------
    // CREAR                                            
    // --------------------------------------------------

    /**
     * Con este método se muestra el formulario para crear una nueva categoría
     * @return view Formulario de nueva categoría
     */
    public function crear($id_incidencia = 0)
    {
        $incidencia["id_incidencia"] = $id_incidencia;
        return view("categorias/view_categorias_crear", $incidencia);
    }


    /**
     * Método para registrar una nueva oficina en la base de datos
     * @return view Vista principal del módulo
     */
    public function guardar($id_incidencia = 0)
    {
        $tbl_categorias = new Model_categorias();
        $registro["nombre_categoria"] = $this->request->getVar("nombre_categoria");
        $tbl_categorias->insert($registro);

        if ($id_incidencia == 0) {
            return $this->response->redirect(base_url("categorias/listar"));
        } else {
            return $this->response->redirect(base_url("incidencias/editar/" . $id_incidencia));
        }
    }

    // --------------------------------------------------
    // EDITAR
    // --------------------------------------------------

    /**
     * Método para mostrar la vista con la información de la oficina a editar
     * @param int $id_oficina ID de la oficina a editar
     * @return view Vista con la información de la oficina buscada
     */
    public function editar($id_categoria)
    {
        $tbl_categorias = new Model_categorias();
        $categoria["categoria"] = $tbl_categorias->buscar_categoria($id_categoria);
        return view("categorias/view_categorias_editar", $categoria);
    }

    /**
     * Método para actualizar el registro de una oficina
     *  @return view Vista "listar oficinas"
     */
    public function actualizar()
    {
        $datos = [
            "nombre_categoria" => $this->request->getVar("nombre_categoria"),
        ];

        $id_categoria = $this->request->getVar("id_categoria");
        $tbl_categorias = new Model_categorias();
        $tbl_categorias->update($id_categoria, $datos);

        return $this->response->redirect(base_url("categorias/listar"));
    }
}
