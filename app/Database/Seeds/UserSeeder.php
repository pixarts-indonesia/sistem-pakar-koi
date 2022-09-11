<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'andri007',
                'nama' => 'ANDRI RIZKI SAPUTRA',
                'email' => 'biyogidofficial@gmail.com',
                'telp' => '082322525083',
                'alamat' => 'DIY',
                'password' => '$2y$10$D/NdbTlQw9KHJU30dbOxz.PKWwIx4JKLBdSsicQwyAMpdsUYLIgdO',
            ]
        ];
        $this->db->table('user')->insertBatch($data);
    }
}