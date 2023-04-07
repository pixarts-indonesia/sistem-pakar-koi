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
                'solusi' => "Dikarantina dengan heater dengan suhu 34 dan di beri obat jamur insang",
                'img' => "jamur-insang.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'white spot',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri garam grosok dan tambahkan metlyn blue",
                'img' => "white-spot.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'aeromonas',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin)",
                'img' => "aeromonas.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'dropsy (sisik nanas)',
                'solusi' => "Dikarantina dengan suhu 34 dan di beri obat antibiotic(amoxicilin) serta air dalam karantina di kuras 70% setiap hari dan diberikan obat sampai sembuh",
                'img' => "dropsy-sisik-nanas.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'sirip dan ekor gripis',
                'solusi' => "Dikarantina, diberi garam grosok setelah 3 hari lalu di beri obat jamur (Metylyn Blue)",
                'img' => "sirip-dan-ekor-gripis.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu kura-kura (argulus)',
                'solusi' => "Dikarantina dan diberi obat kutu (dengan dosis tinggi yang disesuaikan dengan tempat karantina) 1 gram untuk 1000L serta air diganti setiap 2 hari dan ulangi pemberian obat sampai terbebas dari kutu",
                'img' => "kutu-kura-kura-argulus.png"
            ],
            [
                'kode_penyakit' => 'P'.$i++,
                'nama' => 'kutu jamur (kutu jangkar)',
                'solusi' => "Dikarantina dan diberi obat kutu (dengan dosis tinggi yang disesuaikan dengan tempat karantina) 1 gram untuk 1000L serta air diganti setiap 2 hari dan ulangi pemberian obat sampai terbebas dari kutu",
                'img' => "kutu-jamur-kutu-jangkar.png"
            ],
        ];
        $this->db->table('penyakit')->insertBatch($data);
    }
}