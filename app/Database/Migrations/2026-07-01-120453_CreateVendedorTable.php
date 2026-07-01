<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVendedorTable extends Migration
{
    
public function up()
    {
        $this->forge->addField([
            'Id_ctv' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('Id_ctv', true);

        $this->forge->createTable('vendedor');
    }

    public function down()
    {
        $this->forge->dropTable('vendedor');
    }
}
