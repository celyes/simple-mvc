<?php
namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class TasksController {
    public function index()
    {
        return view('index', compact('tasks'));
    }

    public function show()
    {
        $tasks = App::get('database')->selectAll('todos');
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
      $request = App::get('database')->insert('todos', $parameters);
      return redirect('/tasks');

    }
}

// $data = [];
// $data['title'] = 'welcome';

// $tasks = $app['database']->selectAll("todos");
