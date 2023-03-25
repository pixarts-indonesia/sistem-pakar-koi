<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterBobot extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'nilai' => [
                'type' => 'FLOAT',
                'constraint' => 11,
                'default' => 0,
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

        $this->forge->createTable('master_bobot');
    }

    public function down()
    {
		$this->forge->dropTable('master_bobot');
    }
}
