<?php

namespace App\Controllers;

use App\Models\TasksModel;

class Pages extends BaseController

{
    public function index()
    {
        $model = new TasksModel();
        
        $data = [
            'Tasks' => $model
            ->where('task_date = DATE(NOW())')
            ->findAll()
        ];
        return view('header').view('index', $data).view('footer');
    }
    public function about()
    {
        return view('header'). view('about'). view('footer');
    }
}