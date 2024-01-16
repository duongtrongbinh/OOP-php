<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ";
// });
$router->get('/', [App\Controllers\ProductController::class, 'getProduct']);
$router->get('add', [App\Controllers\ProductController::class, 'showAdd']);
$router->post('add-p',[App\Controllers\ProductController::class, 'add']);
$router->get('edit/{id}', [App\Controllers\ProductController::class, 'showone']);
$router->post('update',[App\Controllers\ProductController::class, 'update']);
$router->get('delete/{id}',[App\Controllers\ProductController::class, 'delete']);




# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>