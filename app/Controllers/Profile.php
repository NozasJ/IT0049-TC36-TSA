<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        
        $data = [
            'user' => $model
            ->find(1)
        ];

        return view('header').view('profile', $data).view('footer');
    }
}