<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('headers'); 
        echo view('contenido');
        echo view('footer');
    }
}
