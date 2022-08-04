<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table      = 'mstr_rating';
    protected $primaryKey = 'id';

    protected $allowedFields = ['rating1', 'rating2', 'major_id'];
    protected $createdField  = 'created_at';

    // protected $useSoftDeletes = true;
}
