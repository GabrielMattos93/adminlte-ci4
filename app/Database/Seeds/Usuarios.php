<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        $data = [
            'nome' => 'Gabriel Mattos',
            'password' => password_hash('1234', PASSWORD_DEFAULT),
            'email'    => 'admin@gmail.com',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO usuarios (nome, email, password) VALUES(:nome, :email, :password)', $data);

        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
