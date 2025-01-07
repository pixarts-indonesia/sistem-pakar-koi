<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterBobotSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Sangat Yakin',
                'nilai' => 1
            ],
            [
                'nama' => 'Yakin',
                'nilai' => 0.8
            ],
            [
                'nama' => 'Cukup Yakin',
                'nilai' => 0.6
            ],
            [
                'nama' => 'Mungkin Yakin',
                'nilai' => 0.4
            ],
            [
                'nama' => 'Tidak Yakin',
                'nilai' => 0
            ]
        ];
        $this->db->table('master_bobot')->insertBatch($data);
    }
}
