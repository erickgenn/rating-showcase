<?php

namespace App\Controllers;

use App\Models\MajorModel;
use App\Models\QuestionModel;
use App\Models\RatingModel;

class RatingController extends BaseController
{
    public function index()
    {
        $session = session();
        $majorModel = new MajorModel();
        $questionModel = new QuestionModel();
        $major = $majorModel->where('id', $_SESSION['major_id'])->first();
        $question = $questionModel->findAll();
        return view('rating', compact('major', 'question'));
    }

    public function process()
    {
        date_default_timezone_set("Asia/Jakarta");

        $session = session();
        $majorModel = new MajorModel();
        $ratingModel = new RatingModel();
        $questionModel = new QuestionModel();

        $data = $this->request->getPost();

        $data_insert = [
            'rating1' => $data['rating-1'],
            'rating2'  => $data['rating-2'],
            'major_id'  => $_SESSION['major_id'],
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $ratingModel->insert($data_insert);

        $major = $majorModel->where('id', $_SESSION['major_id'])->first();
        $session->setFlashdata('rating_successful', "success");
        $question = $questionModel->findAll();
        return view('rating', compact('major', 'question'));
    }
}
