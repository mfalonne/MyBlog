<?php

use Router\Router;
use App\Exceptions\NotFoundException;


require "../vendor/autoload.php";

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

define('DB_NAME', 'my_blog');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get('/','App\controllers\BlogController@welcome');
$router->get('/posts','App\controllers\BlogController@index');
$router->get('/posts/:id','App\controllers\BlogController@show');
$router->get('/tags/:id','App\controllers\BlogController@tag');

$router->get('/admin/posts','App\controllers\admin\PostController@index');
$router->post('/admin/posts/delete/:id','App\controllers\admin\PostController@destroy');
$router->get('/admin/posts/edit/:id','App\controllers\admin\PostController@edit');
$router->post('/admin/posts/edit/:id','App\controllers\admin\PostController@update');


try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}