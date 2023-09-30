<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';

    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_project', 'client_project', 'teknologi_project', 'biaya_project', 'status_project', 'lampiran_project'];
}
