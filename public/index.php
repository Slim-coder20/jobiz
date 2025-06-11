<?php
// Charger l'autoload // 
require_once __DIR__ . '/../vendor/autoload.php';
use App\Controller\PageController;

$pageController = new PageController();
$pageController->test();