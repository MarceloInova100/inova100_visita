<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitaModel extends Model
{
    protected $table            = 'visita';
    protected $primaryKey       = 'Id_visita';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'data_visita',
        'Id_Pessoa',
        'Id_visita'
    ];

    protected $useTimestamps = false;
}
