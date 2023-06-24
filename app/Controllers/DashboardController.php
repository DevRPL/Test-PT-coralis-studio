<?php

namespace App\Controllers;

use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();
        return view('dashboard/index', ['user' => $model->getUserById($session->get('id'))]);
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
