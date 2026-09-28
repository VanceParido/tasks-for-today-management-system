<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        return view('welcome', [
            'tasks' => $taskModel->getTodayTasks(),
        ]);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        return view('tasks', [
            'tasks' => $taskModel->getAllTasks(),
        ]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        return view('profile', [
            'user' => $userModel->first(),
        ]);
    }

    public function about()
    {
        return view('about');
    }
}