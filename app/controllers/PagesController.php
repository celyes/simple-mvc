<?php 
namespace App\Controllers;

use App\Core\App;

class PagesController {
    public function index() 
    {
        return view('index');
    }
}

// $data = [];
// $data['title'] = 'welcome';

// $tasks = $app['database']->selectAll("todos");

