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
                'username' => 'lawliet007',
                'nama' => 'Lawliet',
                'email' => 'lawliet@gmail.com',
                'telp' => '082355625362',
                'alamat' => 'ID',
                'password' => password_hash('saras008', PASSWORD_DEFAULT),
                'level' => 2
            ],
            [
                'id' => 2,
                'username' => 'admin',
                'nama' => 'Admin',
                'email' => 'admin@ikan-koi.pixarts.my.id.com',
                'telp' => '082352325233',
                'alamat' => 'ID',
                'password' => password_hash('saras008', PASSWORD_DEFAULT),
                'level' => 1
            ]
        ];
        $this->db->table('user')->insertBatch($data);
    }
}
