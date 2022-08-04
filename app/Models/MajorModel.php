<?php

namespace App\Models;

use CodeIgniter\Model;

class MajorModel extends Model
{
    protected $table      = 'mstr_major';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name'];

    // protected $useSoftDeletes = true;
}
