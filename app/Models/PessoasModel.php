<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoasModel extends Model
{
    protected $table            = 'pessoas';
    protected $primaryKey       = 'codpessoa';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'catvisitante',
        'cidade',
        'cod_tra',
        'codpessoa',
        'nome',
        'cpf',
        'rg',
        'datanascimento',
        'sexo',
        'telefone',
        'email',
        'estado',
        'expositor',
        'empresa',
        'cargo',
        'endereco',
        'bairro',
        'cep',
        'codcidade',
        'codestado',
        'codpais',
        'codvendedor',
        'codexpositor',
        'codcategoria',
        'codsetor',
        'situcliente',
    ];

    protected $useTimestamps = false;
}