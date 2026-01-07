<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('plantilla');
    }

    public function welcome()
    {
        // Esto carga la vista 'welcome_message.php'
        return view('welcome'); 
    }
}
