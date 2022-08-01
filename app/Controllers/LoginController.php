<?php

namespace App\Controllers;

use App\Models\AdminModel;

class LoginController extends BaseController
{

    public function index()
    {
        return view('login');
    }


    public function authentication()
    {
        $session = session();
        $data = $this->request->getPost();
        $email = $data['email'];
        $password = md5($data['password']);

        $adminModel = new AdminModel();
        $admin = $adminModel->where('email', $email)->where('password', $password)->where('is_active', 1)->first();

        if (!isset($admin)) {
            //If login is not successful
            $session->setFlashdata('login_failed', "failed");
            return redirect()->to('/');
        } else {
            //If login is successful
            $session_data = [
                'id' => $admin['id'],
                'name' => $admin['name'],
                'email' => $admin['email'],
                'isLoggedIn' => TRUE,
            ];
            $session->set($session_data);
            $session->setFlashdata('login_successful', $admin['name']);

            return redirect()->to('/home');
        }
    }

    public function logout()
    {
        $session = session();

        session_destroy();
        return redirect()->to('/');
    }
}
