<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table      = 'mstr_question';
    protected $primaryKey = 'id';

    protected $allowedFields = ['question1', 'question2'];

    // protected $useSoftDeletes = true;
}
