<?php
// Charger l'autoload
require_once __DIR__ . "/../vendor/autoload.php";

// On définit une constante pour avoir le chemin racine de l'app
define('APP_ROOT', dirname(__DIR__));

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);







