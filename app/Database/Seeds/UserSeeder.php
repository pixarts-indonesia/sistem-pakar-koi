<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'username' => 'andri007',
                'nama' => 'ANDRI RIZKI SAPUTRA',
                'email' => 'biyogidofficial@gmail.com',
                'telp' => '082322525083',
                'alamat' => 'DIY',
                'password' => password_hash('saras008', PASSWORD_DEFAULT),
                'level' => 2
            ],
            [
                'id' => 2,
                'username' => 'admin-master',
                'nama' => 'Admin Master',
                'email' => 'admin-master@gmail.com',
                'telp' => '082322525083',
                'alamat' => 'DIY',
                'password' => password_hash('saras008', PASSWORD_DEFAULT),
                'level' => 1
            ]
        ];
        $this->db->table('user')->insertBatch($data);
    }
}