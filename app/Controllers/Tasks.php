<?php

namespace App\Controllers;

use App\Models\TasksModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TasksModel();
        
        $data = [
            'Tasks' => $model
            ->orderBy('task_date', 'DESC')
            ->findAll()
        ];

        return view('header').view('tasks', $data).view('footer');
    }
}