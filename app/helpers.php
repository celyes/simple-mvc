<?php

/*
* return a view to the user
*/
function view($name, $data = []) {
    extract($data);
    require "resources/views/{$name}.view.php";
}

function redirect($path) {
  header("Location: {$path}");
}
