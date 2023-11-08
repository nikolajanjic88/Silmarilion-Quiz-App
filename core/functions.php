<?php

function dd($value) 
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function abort($code = 404) 
{
  http_response_code($code);
  require_once BASE_PATH . "views/$code.php";
  die();
}

function view($path, $attributes = [])
{
  extract($attributes);
  require BASE_PATH . 'views/' . $path;
}

function redirect($path) 
{
  header("location: {$path}");
  die();
}

function old($key, $default = '') 
{
  return core\Session::get('old')[$key] ?? $default;
}
