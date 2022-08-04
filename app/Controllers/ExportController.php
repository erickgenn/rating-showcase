<?php

namespace App\Controllers;

use App\Models\RatingModel;

class ExportController extends BaseController
{
    public function export()
    {
        date_default_timezone_set("Asia/Jakarta");
        $session = session();
        $ratingModel = new RatingModel();

        $rating = $ratingModel->exportView()->getResultArray();
        for ($i = 0; $i < count($rating); $i++) {
            $timestamp = strtotime($rating[$i]['created_at']);
            $rating[$i]['date'] = date('d-m-Y', $timestamp);
            $rating[$i]['time'] = date('H:i:s', $timestamp);
        }
        return view('excel_export', compact('rating'));
    }
}
