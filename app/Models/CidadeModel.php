<?php

namespace App\Models;

use CodeIgniter\Model;

class CidadeModel extends Model
{
    protected $table            = 'cidade';
    protected $primaryKey       = 'codcidade';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'codcidade',
        'cidade',
        'codibge',
        'uf'
    ];

    protected $useTimestamps = false;
}
