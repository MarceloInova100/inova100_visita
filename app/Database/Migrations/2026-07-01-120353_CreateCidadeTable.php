<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCidadeTable extends Migration
{
    
public function up()
    {
        $this->forge->addField([
            'codcidade' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'cidade' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'codibge' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'uf' => [
                'type'       => 'CHAR',
                'constraint' => 2,
            ],
        ]);

        $this->forge->addKey('codcidade', true);

        $this->forge->createTable('cidade');
    }

    public function down()
    {
        $this->forge->dropTable('cidade');
    }

}
