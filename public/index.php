<?php
require_once "./../vendor/autoload.php";

use app\controllers\AuthController;
use app\controllers\ContactController;
use app\controllers\HomeController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [new HomeController, 'index']);

$app->router->get('/contact', [new ContactController, 'index']);
$app->router->post('/contact', [new ContactController, 'create']);

$app->router->get('/login', [new AuthController, 'login']);
$app->router->post('/login', [new AuthController, 'loginHandler']);

$app->router->get('/register', [new AuthController, 'register']);
$app->router->post('/register', [new AuthController, 'register']);

$app->run();