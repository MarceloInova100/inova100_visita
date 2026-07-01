<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePessoaTable extends Migration
{
    
public function up()
    {
        $this->forge->addField([
            'codpessoa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'catvisitante' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
            ],

            'cidade' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],

            'cod_tra' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],

            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => 14,
                'null'       => true,
            ],

            'rg' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],

            'datanascimento' => [
                'type' => 'DATE',
                'null' => true,
            ],

            'sexo' => [
                'type'       => 'CHAR',
                'constraint' => 1,
                'null'       => true,
            ],

            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],

            'estado' => [
                'type'       => 'CHAR',
                'constraint' => 2,
                'null'       => true,
            ],

            'expositor' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],

            'empresa' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],

            'cargo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],

            'endereco' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'bairro' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],

            'cep' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => true,
            ],

            'codcidade' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codestado' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codpais' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codvendedor' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codexpositor' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codcategoria' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'codsetor' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],

            'situcliente' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('codpessoa', true);

        $this->forge->createTable('pessoa');
    }

    public function down()
    {
        $this->forge->dropTable('pessoa');
    }
}
