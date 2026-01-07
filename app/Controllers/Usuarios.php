<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{
    public function crear()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/plantilla');
        }

        return view('crear_usuarios');
    }

    public function guardar()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/plantilla');
        }

        $nombre   = $this->request->getPost('nombre');
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $db = \Config\Database::connect();

        $existe = $db->query(
            "SELECT id_usuario FROM usuarios WHERE email = ?",
            [$email]
        )->getRow();

        if ($existe) {
            return redirect()->back()->with('error', 'El correo ya existe');
        }

        $db->query(
            "INSERT INTO usuarios (nombre, email, password)
             VALUES (?, ?, ?)",
            [$nombre, $email, $passwordHash]
        );

        return redirect()->to('/dashboard')
            ->with('success', 'Usuario creado correctamente');
    }
}
