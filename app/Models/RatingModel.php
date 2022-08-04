<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table      = 'mstr_rating';
    protected $primaryKey = 'id';

    protected $allowedFields = ['rating1', 'rating2', 'major_id', 'created_at'];


    public function exportView()
    {
        $builder = $this->db->table('mstr_rating');
        $builder->select('*');
        $builder->join('mstr_major', 'mstr_major.id = mstr_rating.major_id');

        return $builder->get();
    }
    // protected $useSoftDeletes = true;
}
