<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();

        // Buscar usuario por email
        $query = $db->query(
            "SELECT * FROM usuarios WHERE email = ? LIMIT 1",
            [$email]
        );

        $usuarioDB = $query->getRowArray();

        // Verificar usuario y contraseña
        if ($usuarioDB && password_verify($password, $usuarioDB['password'])) {


            session()->set([
                'id_usuario' => $usuarioDB['id_usuario'],
                'usuario'    => $usuarioDB['nombre'],
                'logged_in'  => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/plantilla');
    }

    public function plantilla()
    {
        return view('plantilla');
    }
}
