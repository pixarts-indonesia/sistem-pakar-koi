<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RunSeeder extends Seeder
{
    public function run()
    {
        $this->call('GejalaSeeder');
        $this->call('PenyakitSeeder');
        $this->call('RulesSeeder');
        $this->call('UserSeeder');
    }
}