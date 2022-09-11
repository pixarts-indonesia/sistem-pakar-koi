<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RulesSeeder extends Seeder
{
    public function run()
    {
        $i = 0;
        $i++;
        $data = [
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G1',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G2',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G4',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G5',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G1',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G2',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G6',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G7',
                'nilai_bobot' => 2,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G8',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G9',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G1',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G2',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G10',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G11',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G1',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G2',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G12',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G3',
                'nilai_bobot' => 3,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G13',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G14',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i++,
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G15',
                'nilai_bobot' => 5,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P7',
                'kode_gejala' => 'G8',
                'nilai_bobot' => 4,
            ],
            [
                'kode_rules' => 'R'.$i,
                'kode_penyakit' => 'P7',
                'kode_gejala' => 'G16',
                'nilai_bobot' => 5,
            ],
        ];
        $this->db->table('rules')->insertBatch($data);
    }
}