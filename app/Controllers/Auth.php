<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function auth()
    {
        $validated = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        if (!$validated) {

            return redirect()->route('login')->with('erros', $this->validator->getErrors());
        }

        $usuario = new Usuario();

        $Buscarusuario = $usuario->select('id, nome, email,password')->where('email', $this->request->getPost('email'))->first();
        if (!$Buscarusuario) {
            return redirect()->route('login')->with('message', "O email ou a senha está incorreto  ");
        }

        if (!password_verify($this->request->getPost('password'), $Buscarusuario->password)) {
            return redirect()->route('login')->with('message', "O email ou a senha está incorreto  ");
        }
        unset($Buscarusuario->password);
        session()->set('usuarios', $Buscarusuario);

        return redirect()->to('/admin');
    }

    public function destroy()
    {
        session()->destroy();

        return redirect()->route('/home');
    }
}
