<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Perfil extends BaseController
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        // Validar sesión
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $id = session()->get('id_usuario');

        $usuario = $this->usuarioModel->find($id);

        // Evita Whoops si algo falla
        if (!$usuario) {
            return redirect()->to('/dashboard');
        }

        return view('perfil', [
            'usuario' => $usuario
        ]);
    }

    public function actualizar()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $id = session()->get('id_usuario');

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email'  => $this->request->getPost('email'),
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            );
        }

        $this->usuarioModel->update($id, $data);

        return redirect()->back()->with('success', 'Perfil actualizado');
    }
}
