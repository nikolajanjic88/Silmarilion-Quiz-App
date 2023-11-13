<?php

use core\Router;
use core\Session;

const BASE_PATH = __DIR__ . "/../";

require_once BASE_PATH . "vendor/autoload.php";

session_start();

require_once BASE_PATH . "core/functions.php";

$router = new Router();

require_once BASE_PATH . "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);

Session::unflash();