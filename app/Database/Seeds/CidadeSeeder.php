<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CidadeSeeder extends Seeder
{
    
public function run()
    {
        
$arquivo = WRITEPATH . 'uploads/municipios.csv';

        if (! file_exists($arquivo)) {
            throw new \Exception('Arquivo municipios.csv não encontrado.');
        }

        $handle = fopen($arquivo, 'r');

        // Ignora cabeçalho
        fgetcsv($handle, 1000, ',');

        $dados = [];
        $codcidade = 1;

        while (($linha = fgetcsv($handle, 1000, ',')) !== false) {
            $dados[] = [
                'codcidade' => $codcidade++,
                'codibge'   => $linha[0],
                'cidade'    => $linha[1],
                'uf'        => $linha[2],
            ];

            // Insere em lotes
            if (count($dados) >= 500) {
                $this->db->table('cidade')->insertBatch($dados);
                $dados = [];
            }
        }

        if (! empty($dados)) {
            $this->db->table('cidade')->insertBatch($dados);
        }

        fclose($handle);
    }
}
