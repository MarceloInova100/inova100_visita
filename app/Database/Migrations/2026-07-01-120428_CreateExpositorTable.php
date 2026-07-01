<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExpositorTable extends Migration
{
    
public function up()
    {
        $this->forge->addField([
            'codexpositor' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'categoria' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],

            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
        ]);

        $this->forge->addKey('codexpositor', true);

        $this->forge->createTable('expositor');
    }

    public function down()
    {
        $this->forge->dropTable('expositor');
    }
}
