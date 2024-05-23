<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Controller_testing extends Controller
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
        return
            view("view_template_head") .
            view("view_template_register") .
            view("view_template_footer");
    }
}
