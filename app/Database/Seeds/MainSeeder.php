<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('GejalaSeeder');
        $this->call('MasterBobotSeeder');
        $this->call('PenyakitSeeder');
        $this->call('RespondenSeender');
        $this->call('RulesSeeder');
        $this->call('UserSeeder');
    }
}