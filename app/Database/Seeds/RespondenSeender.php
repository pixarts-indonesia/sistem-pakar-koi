<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RespondenSeender extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pertanyaan' => 'Saya berpikir akan menggunakan sistem ini lagi',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa sistem ini rumit untuk digunakan',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa sistem ini mudah digunakan',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya membutuhkan bantuan dari orang lain atau teknisi dalam menggunakan sistem ini',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa fitur-fitur sistem ini berjalan dengan semestinya',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa ada banyak hal yang tidak konsisten (tidak serasi pada sistem ini)',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa orang lain akan memahami cara menggunakan sistem ini dengan cepat',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa sistem ini membingungkan',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya merasa tidak ada hambatan dalam menggunakan sistem ini',
                'created_by' => 2,
            ],
            [
                'pertanyaan' => 'Saya perlu membiasakan diri terlebih dahulu sebelum menggunakan sistem ini',
                'created_by' => 2,
            ],
        ];
        $this->db->table('responden')->insertBatch($data);
    }
}
