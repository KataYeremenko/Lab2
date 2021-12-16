<?php
session_start();
require_once 'config/objectModel.php';
require_once 'route/web.php';

//define controller and action
$controllerName = $_GET['controller'] ?? 'index';
$actionName = $_GET['action'] ?? 'index';

$routing = new Route();
$db = new ObjectModel();

$routing->loadPage($db, $controllerName, $actionName);