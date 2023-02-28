<?php
/* @var $pdo PDO */
require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

session_start();
$pdo = require_once 'db.php';




$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';


require_once $routes[$controller];
