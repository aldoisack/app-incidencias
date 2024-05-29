<?php

namespace App\Controllers;

use App\Models\Model_oficinas;
use App\Models\Model_perfiles;
use App\Models\Model_usuarios;
use CodeIgniter\Controller;

class Controller_login extends Controller
{
    public function login()
    {
        return
            view("view_template_head") .
            view("view_template_login") .
            view("view_template_footer");
    }
    public function register()
    {
        $oficinas = new Model_oficinas();
        $datos["oficinas"] = $oficinas -> orderBy("id_oficina", "ASC") -> findAll();

        return
            view("view_template_head") .
            view("view_template_register", $datos) .
            view("view_template_footer");
    }

    public function guardar(){
        
        /*      
            1. Primero busco el registro con el valor "Empleado"
            2. Luego obtengo su ID
            3. Guardo el ID el los datos a enviar
        */        

        $perfiles = new Model_perfiles();
        $registro_empleado = $perfiles->where("nombre_perfil", "Empleado")->first();
        
        $usuarios = new Model_usuarios();
        $datos = [
            "nombres"   => $this->request->getVar("nombres"  ),
            "apellidos" => $this->request->getVar("apellidos"),
            "correo" => $this->request->getVar("correo"),
            "contrasenia" => $this->request->getVar("contrasenia"),
            "id_perfil" => $registro_empleado["id_perfil"],
            "id_oficina" => $this->request->getVar("id_oficina"),
            "id_estado" => 1,
        ];
        
        $usuarios->insert($datos);
        
        return $this->response->redirect(base_url());
    }
}