<?php

namespace App\Models;

use CodeIgniter\Model;

class VendedorModel extends Model
{
    protected $table            = 'vendedor';
    protected $primaryKey       = 'Id_ctv';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'Id_ctv',
        'nome',
        'email'
    ];

    protected $useTimestamps = false;
}