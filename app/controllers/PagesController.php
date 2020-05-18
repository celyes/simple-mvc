<?php 
namespace App\Controllers;

use App\Core\App;

class PagesController {
    public function index() 
    {
       
        $tasks = App::get('database')->selectAll('todos');
        return view('index', compact('tasks'));
    }
}

// $data = [];
// $data['title'] = 'welcome';

// $tasks = $app['database']->selectAll("todos");

