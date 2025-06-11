<?php
// Charger l'autoload // 
require_once __DIR__ . '/../vendor/autoload.php';
use App\Controller\PageController;

// ON défini une constante pour avoir le chemin racine de l'app // 
define('APP_ROOTE', dirname(__DIR__));


$pageController = new PageController();
$pageController->home();