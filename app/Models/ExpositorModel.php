<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpositorModel extends Model
{
    protected $table            = 'expositor';
    protected $primaryKey       = 'codexpositor';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'codexpositor',
        'categoria',
        'nome'
    ];

    protected $useTimestamps = false;
}