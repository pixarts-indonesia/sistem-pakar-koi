<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $code = 'G';
        $i = 1;
        $data = [
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'mata berkabut',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'terdapat cacing yang menempel pada tubuh',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'menurunnya kekebalan tubuh / lemah',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'sering menggesekkan tubuh pada dinding',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'terdapat bintik-bintik hitam (bukan corak)',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'terdapat bintik-bintik putih (bukan corak)',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'sisik yang mulai tanggal dari badan ikan',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'badan gembur',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'kesulitan dalam berenang',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'perut membengkak',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'produksi lendir berlebih',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'mata menonjol',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'badan ikan kurus',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'tulang sirip dan ekor ikan menjadi buram',
            ],
            [
                'kode_gejala' => $code . $i++,
                'nama' => 'sirip dan ekor mulai membusuk',
            ]
        ];
        $this->db->table('gejala')->insertBatch($data);
    }
}
