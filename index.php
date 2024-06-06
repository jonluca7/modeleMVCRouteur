<?php 

define("BASE_URL", '/modeleMVCRouteur');

// Inclusion des classes
require_once 'models/Router.php';
require_once 'models/User.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/ProfileController.php';
require_once 'controllers/LogoutController.php';

// Instantiation du Routeur

$router = new Router();

// Définition des Routes

$router->addRoute('GET', BASE_URL.'/', 'HomeController', 'index');
$router->addRoute('POST' , BASE_URL.'/profile', 'ProfileController','index');
$router->addRoute('GET' , BASE_URL.'/logout', 'LogoutController', 'index');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$handler = $router->gethandler($method, $uri);

if ($handler == null)
{
    header ('HTTP/1.1 404 not found');
    exit();
}

// Appel du Controlleur

$controller = new $handler['controller']();
$action = $handler['action'];
$controller->$action();