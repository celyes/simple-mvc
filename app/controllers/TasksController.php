<?php
namespace App\Controllers;

use App\Core\{ App, Request };
use App\Models\Task;

class TasksController {
  
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }
    public function newTask()
    {
      return view('new-task');
    }
    public function create()
    {
      // needs validation

      $parameters = App::get('request');
      Task::insert('todos', $parameters);
      return redirect('/tasks');

    }
}

// $data = [];
// $data['title'] = 'welcome';

// $tasks = $app['database']->selectAll("todos");
