<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $code = 'H';
        $i = 1;
        $data = [
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'cloudy eye',
                'solusi' => "Dikarantina dengan heater dengan suhu 34 dan di beri obat jamur insang",
                'img' => "jamur-insang.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'kutu jangkar',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri garam grosok dan tambahkan metlyn blue",
                'img' => "white-spot.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'black spot',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin)",
                'img' => "aeromonas.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'white spot',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin) serta air dalam karantina di kuras 70% setiap hari dan diberikan obat sampai sembuh",
                'img' => "dropsy-sisik-nanas.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'dropsy',
                'solusi' => "Dikarantina, diberi garam grosok setelah 3 hari lalu di beri obat jamur (Metylyn Blue)",
                'img' => "sirip-dan-ekor-gripis.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'fin/tail rot',
                'solusi' => "Dikarantina dan diberi obat kutu (dengan dosis tinggi yang disesuaikan dengan tempat karantina) 1 gram untuk 1000L serta air diganti setiap 2 hari dan ulangi pemberian obat sampai terbebas dari kutu",
                'img' => "kutu-kura-kura-argulus.png"
            ]
        ];
        $this->db->table('penyakit')->insertBatch($data);
    }
}
