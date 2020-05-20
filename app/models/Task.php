<?php


namespace App\Models;

use App\Core\App;

class Task {

  public static function all()
  {
    return App::get('database')->selectAll('todos');
  }

  public static function insert($table, $parameters)
  {
    App::get('database')->insert($table, $parameters);
    return true;
  }
}
