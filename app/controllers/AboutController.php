<?php 
namespace App\Controllers;

use App\Core\App;

class AboutController {
    
    public function index() 
    {
        return view('about', ['title' => 'about us']);
    }
}