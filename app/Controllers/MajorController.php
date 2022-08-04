<?php

namespace App\Controllers;

use App\Models\AdminModel;

class MajorController extends BaseController
{

    public function process()
    {
        $session = session();
        $session_data = [
            'major_id' => ""
        ];
        $session->set($session_data);

        $data = $this->request->getPost();
        if (!isset($data['major_id'])) {
            $session->setFlashdata('major_notset', "failed");
            return redirect()->to('/home');
        }
        $major_id = $data['major_id'];

        $session_data = [
            'major_id' => $major_id
        ];
        $session->set($session_data);
        return redirect()->to('/rating');
    }
}
