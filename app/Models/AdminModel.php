<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'mstr_admin';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'password'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // protected $useSoftDeletes = true;
}
