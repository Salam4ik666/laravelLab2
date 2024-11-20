<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => [
            ['id' => 1, 'title' => 'Task 1', 'description' => 'Description 1'],
            ['id' => 2, 'title' => 'Task 2', 'description' => 'Description 2'],
        ]]);
    }

    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => "Task $id",
            'description' => "Description of task $id",
        ];

        return view('tasks.show', ['task' => $task]);
    }

    // Пока оставим остальные методы пустыми.
    public function create() {}
    public function store() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}

