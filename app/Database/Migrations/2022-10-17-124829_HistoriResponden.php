<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistoriResponden extends Migration
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
            'params' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'null' => true,
            ],
            'nilai' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
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

        $this->forge->createTable('histori_responden');
    }

    public function down()
    {
		$this->forge->dropTable('histori_responden');
    }
}
