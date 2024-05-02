<?php

require '../vendor/autoload.php';

use Router\Router;
use App\Exceptions\NotFoundException;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Database\DBConnection;
use App\controllers\BlogController;
use App\controllers\UserController;
use App\controllers\admin\PostController;

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'myblog');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$loader = new FilesystemLoader(VIEWS);
$twig = new Environment($loader, [
    'cache' => dirname(__DIR__) . '/cache',
    'debug' => true
]);

$dbConnection = new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD);

$blogController = new BlogController($dbConnection, $twig);
$userController = new UserController($dbConnection, $twig);
$postAdminController = new PostController($dbConnection, $twig);

$router = new Router($_GET['url']);

$router->get('/', [$blogController, 'welcome']);
$router->get('/posts', [$blogController, 'index']);
$router->get('/posts/:id', [$blogController, 'show']);
$router->get('/tags/:id', [$blogController, 'tag']);

$router->get('/login', [$userController, 'login']);
$router->post('/login', [$userController, 'loginPost']);
$router->get('/logout', [$userController, 'logout']);

$router->get('/admin/posts', [$postAdminController, 'index']);
$router->get('/admin/posts/create', [$postAdminController, 'create']);
$router->post('/admin/posts/create', [$postAdminController, 'createPost']);
$router->post('/admin/posts/delete/:id', [$postAdminController, 'destroy']);
$router->get('/admin/posts/edit/:id', [$postAdminController, 'edit']);
$router->post('/admin/posts/edit/:id', [$postAdminController, 'update']);

try {
    $router->run();
} catch (NotFoundException $e) {
    echo $twig->render('errors/404.twig');
}