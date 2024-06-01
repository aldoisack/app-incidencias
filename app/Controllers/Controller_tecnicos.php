<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Model_tecnicos;
use App\Models\Model_oficinas;
use App\Models\Model_perfiles;
use App\Models\Model_estados;
use App\Models\Model_usuarios;

class Controller_tecnicos extends Controller
{
    // -----------------------------------
    // Crear
    // -----------------------------------

    public function crear()
    {
        return
            view("templates/view_template_head"  ) .
            view("admin/view_admin_header") .
            view("admin/view_admin_tecnicos_crear" ) .
            view("templates/view_template_footer");
    }

    public function guardar()
    {
       /* 
        * PERFIL => Técnico
        */ 

        // Búsqueda del perfil "Técnico"
        $perfiles = new Model_perfiles();
        $perfil_tecnico = $perfiles
                                ->where("nombre_perfil", "Técnico")
                                ->first();

        // Extracción del ID
        $id_perfil_tecnico = $perfil_tecnico["id_perfil"];
        

       /* 
        * OFICINA => Tecnologías de la información
        */ 

        $oficinas = new Model_oficinas();
        $oficina_tecnologias_informacion = $oficinas
                                                ->where("nombre_oficina", "Tecnologías de la información")
                                                ->first();

        // Extracción del ID
        $id_oficina_tecnologias_informacion = $oficina_tecnologias_informacion["id_oficina"];
        
        
       /* 
        * ESTADO => Habilitado
        */ 

        $estados = new Model_estados();
        $estado_habilitado = $estados
                                ->where("nombre_estado", "Habilitado")
                                ->first();

        // Extracción del ID
        $id_estado_habilitado = $estado_habilitado["id_estado"];

        // Obtenemos los datos
        $datos = [
            "nombres"     => $this->request->getVar("nombres"    ),
            "apellidos"   => $this->request->getVar("apellidos"  ),
            "correo"      => $this->request->getVar("correo"     ),
            "contrasenia" => $this->request->getVar("contrasenia"),
            "id_perfil"   => $id_perfil_tecnico,
            "id_oficina"  => $id_oficina_tecnologias_informacion,
            "id_estado"   => $id_estado_habilitado,
        ];
        
        // Registramos en la base de datos
        $tecnicos = new Model_usuarios();
        $tecnicos->insert($datos);

        return $this->response->redirect(base_url("tecnicos/leer"));
    }

    // -----------------------------------
    // Leer
    // -----------------------------------
    
    public function leer()
    {
        /*
         * En la tabla "Perfiles"
         * obtenemos el ID del registro con el valor "Técnico"
         * y lo utilizamos para filtrar los registros de la tabla "Usuarios" 
        */ 

        // Búsqueda del perfil "Técnico"
        $perfiles = new Model_perfiles();
        $perfil_tecnico = $perfiles
                                ->where("nombre_perfil", "Técnico")
                                ->first();

        // Extracción del ID
        $id_perfil_tecnico = $perfil_tecnico["id_perfil"];

        // Filtrado registros (se quedan solo técnicos)
        $tecnicos = new Model_usuarios();
        $datos["tecnicos"] = $tecnicos
                                ->where("id_perfil", $id_perfil_tecnico)
                                ->orderBy("id_usuario", "ASC")
                                ->findAll();

        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_tecnicos_leer", $datos) .
            view("templates/view_template_footer");
    }
    

    // -----------------------------------
    // Actualizar
    // -----------------------------------

    public function actualizar($id_tecnico = null)
    {
        // Buscamos el registro a actualizar
        $tecnicos = new Model_usuarios();
        $datos["tecnico"] = $tecnicos
                                ->where("id_usuario", $id_tecnico)
                                ->first();
        // Enviamos la información
        return
            view("templates/view_template_head") .
            view("admin/view_admin_header") .
            view("admin/view_admin_tecnicos_actualizar", $datos) .
            view("templates/view_template_footer");
    }

    public function guardar_cambios()
    {
        /* 
        * PERFIL => Técnico
        */ 

        // Búsqueda del perfil "Técnico"
        $perfiles = new Model_perfiles();
        $perfil_tecnico = $perfiles
                                ->where("nombre_perfil", "Técnico")
                                ->first();

        // Extracción del ID
        $id_perfil_tecnico = $perfil_tecnico["id_perfil"];
        

       /* 
        * OFICINA => Tecnologías de la información
        */ 

        $oficinas = new Model_oficinas();
        $oficina_tecnologias_informacion = $oficinas
                                                ->where("nombre_oficina", "Tecnologías de la información")
                                                ->first();

        // Extracción del ID
        $id_oficina_tecnologias_informacion = $oficina_tecnologias_informacion["id_oficina"];
        
        
       /* 
        * ESTADO => Habilitado
        */ 

        $estados = new Model_estados();
        $estado_habilitado = $estados
                                ->where("nombre_estado", "Habilitado")
                                ->first();

        // Extracción del ID
        $id_estado_habilitado = $estado_habilitado["id_estado"];

        $datos = [
            "nombres"     => $this->request->getVar("nombres"    ),
            "apellidos"   => $this->request->getVar("apellidos"  ),
            "correo"      => $this->request->getVar("correo"     ),
            "contrasenia" => $this->request->getVar("contrasenia"),
            "id_perfil"   => $id_perfil_tecnico,
            "id_oficina"  => $id_oficina_tecnologias_informacion,
            "id_estado"   => $id_estado_habilitado,
        ];

        // ID del registro a actualizar
        $id_usuario = $this->request->getVar("id_usuario");

        $usuarios = new Model_usuarios();
        $usuarios->update($id_usuario, $datos);

        return $this->response->redirect(base_url("tecnicos/leer"));
    }
}
