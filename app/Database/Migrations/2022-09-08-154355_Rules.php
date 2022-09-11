<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kode_rules' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'kode_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'nilai_bobot' => [
                'type' => 'SMALLINT',
                'constraint' => 6,
                'null' => true
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'deleted_at' => [
                'type' => 'SMALLINT',
                'constraint' => 6,
                'default' => 0,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('rules');
    }

    public function down()
    {
		$this->forge->dropTable('rules');
    }
}
