<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVisitaTable extends Migration
{
    
public function up()
    {
        $this->forge->addField([
            'Id_visita' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'Id_Pessoa' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'data_visita' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('Id_visita', true);

        $this->forge->createTable('visita');
    }

    public function down()
    {
        $this->forge->dropTable('visita');
    }
}
