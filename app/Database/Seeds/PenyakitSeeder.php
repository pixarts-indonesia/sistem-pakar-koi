<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $i = 1;
        $data = [
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'jamur insang',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'white spot',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu jamur (kutu jangkar)',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'aeromonas',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'dropsy (sisik nanas)',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'sirip dan ekor gripis',
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu kura-kura',
            ],
        ];
        $this->db->table('penyakit')->insertBatch($data);
    }
}