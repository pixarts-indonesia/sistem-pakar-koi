<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RulesSeeder extends Seeder
{
    public function run()
    {
        $code = 'R';
        $i = 0;
        $i++;
        $data = [
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H1',
                'kode_gejala' => 'G1',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H1',
                'kode_gejala' => 'G11',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i++,
                'kode_penyakit' => 'H1',
                'kode_gejala' => 'G12',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H2',
                'kode_gejala' => 'G2',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H2',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i++,
                'kode_penyakit' => 'H2',
                'kode_gejala' => 'G4',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H3',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H3',
                'kode_gejala' => 'G5',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i++,
                'kode_penyakit' => 'H3',
                'kode_gejala' => 'G13',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H4',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H4',
                'kode_gejala' => 'G6',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i++,
                'kode_penyakit' => 'H4',
                'kode_gejala' => 'G13',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H5',
                'kode_gejala' => 'G7',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H5',
                'kode_gejala' => 'G8',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H5',
                'kode_gejala' => 'G9',
                'nilai_bobot' => 3,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i++,
                'kode_penyakit' => 'H5',
                'kode_gejala' => 'G10',
                'nilai_bobot' => 4,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H6',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 4,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H6',
                'kode_gejala' => 'G14',
                'nilai_bobot' => 4,
                'status' => 1,
            ],
            [
                'kode_rules' => $code . $i,
                'kode_penyakit' => 'H6',
                'kode_gejala' => 'G15',
                'nilai_bobot' => 5,
                'status' => 1,
            ]
        ];
        $this->db->table('rules')->insertBatch($data);
    }
}
