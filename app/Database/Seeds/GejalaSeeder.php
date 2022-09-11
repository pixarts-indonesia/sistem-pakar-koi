<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $i = 1;
        $data = [
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan terlihat lemas',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan tidak napsu makan',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan telihat menyendiri',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'kesulitan bernapas',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'terdapat bintik/selaput putih di insang',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'terdapat bintik putih yang ada di badan, sirip/ekor',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan terlihat gelisah',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan menyesekan badan ke dasar kolam/ikan sering lompat',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'terdapat beda jarum yang menempel pada bagian ikan',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'sirip ekor rusak (terkikis)',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'badan memar dan sisik copot',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'badan ikan mengembung dan sisik seperti berdiri (seperti kulit nanas)',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ikan berenang tidak tenang',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'ada guratan merah di badan di dekat sirip atau ekor',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'sirip/ekor mengalami gripis',
            ],
            [
                'kode_gejala' => 'G'.$i++,
                'nama' => 'terdapat parasit berbentuk bulat yang menempel di badan/sirip ikan',
            ],
        ];
        $this->db->table('gejala')->insertBatch($data);
    }
}