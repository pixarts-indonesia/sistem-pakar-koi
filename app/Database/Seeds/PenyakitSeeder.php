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
                'solusi' => "Perbaiki kualitas air dengan mengganti sebagian air. Gunakan antibiotik atau larutan garam untuk membantu pemulihan. Pastikan pH air stabil.",
                'img' => "cloudy-eye.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'kutu jangkar',
                'solusi' => "Gunakan obat anti-parasit yang khusus untuk kutu ikan, seperti formalin atau tembaga sulfat. Pastikan untuk mengikuti dosis yang tepat.",
                'img' => "kutu-jangkar.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'black spot',
                'solusi' => "Penyakit ini biasanya disebabkan oleh parasit atau infeksi jamur. Gunakan obat anti-jamur atau parasit, serta pastikan kualitas air terjaga.",
                'img' => "black-spot.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'white spot',
                'solusi' => "Obat yang mengandung malachite green atau formalin dapat digunakan untuk mengobati infeksi parasit ini. Tingkatkan suhu air untuk mempercepat proses penyembuhan.",
                'img' => "white-spot.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'dropsy',
                'solusi' => "Dropy disebabkan oleh infeksi bakteri yang mengakibatkan pembengkakan. Gunakan antibiotik dalam air atau langsung pada ikan. Pisahkan ikan yang sakit agar tidak menular.",
                'img' => "dropsy.png"
            ],
            [
                'kode_penyakit' => $code . $i++,
                'nama' => 'fin/tail rot',
                'solusi' => "Potong bagian sirip yang terinfeksi dan gunakan antiseptik atau antibiotik untuk mencegah infeksi lebih lanjut. Perbaiki kualitas air dan pastikan tidak ada polusi.",
                'img' => "fin-tail-rot.png"
            ]
        ];
        $this->db->table('penyakit')->insertBatch($data);
    }
}
