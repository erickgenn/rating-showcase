<?php

namespace App\Controllers;

use App\Models\MajorModel;

class Home extends BaseController
{
    public function index()
    {
        $majorModel = new MajorModel();
        $major = $majorModel->findAll();
        return view('index', compact('major'));
    }
}
