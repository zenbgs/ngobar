<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';

    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['first_name', 'last_name', 'email', 'country'];
}
