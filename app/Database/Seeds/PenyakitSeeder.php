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
                'solusi' => "Dikarantina dengan heater dengan suhu 34 dan di beri obat jamur insang"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'white spot',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri garam grosok dan tambahkan metlyn blue"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'aeromonas',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin)"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'dropsy (sisik nanas)',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin) serta air dalam karantina di kuras 70% setiap hari dan diberikan obat sampai sembuh"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'sirip dan ekor gripis',
                'solusi' => "Dikarantina, diberi garam grosok setelah 3 hari lalu di beri obat jamur (Metylyn Blue)"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu kura-kura (argulus)',
                'solusi' => "Dikarantina dan diberi obat kutu (dengan dosis tinggi yang disesuaikan dengan tempat karantina) 1 gram untuk 1000L serta air diganti setiap 2 hari dan ulangi pemberian obat sampai terbebas dari kutu"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu jamur (kutu jangkar)',
                'solusi' => "Dikarantina dan diberi obat kutu (dengan dosis tinggi yang disesuaikan dengan tempat karantina) 1 gram untuk 1000L serta air diganti setiap 2 hari dan ulangi pemberian obat sampai terbebas dari kutu"
            ],
        ];
        $this->db->table('penyakit')->insertBatch($data);
    }
}