<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    // Welcome page
    public function index()
    {
        $taskModel = new TaskModel();

        $today = date('Y-m-d');

        $data['tasks'] = $taskModel
            ->where('task_date', $today)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('welcome', $data);
    }

    // Task List page
    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }

    // Profile page
    public function profile()
    {
        $userModel = new UserModel();

        // Get the single demo user
        $data['user'] = $userModel->find(1);

        return view('profile', $data);
    }

    // About page
    public function about()
    {
        return view('about');
    }
}