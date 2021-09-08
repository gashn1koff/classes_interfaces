<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../app/functions.php';



use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Core\DB;



$routes =
    [
        '/catalog/(\d+)' => [CatalogController::class, 'showProduct'],
        '/catalog' => [CatalogController::class, 'index'],
        '/contacts' => [HomeController::class, 'contacts'],
        '/' => [HomeController::class, 'index'],
    ];

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
var_dump($url);

foreach ($routes as $route => $item) {
    $route = str_replace('/', '\/', $route);
    preg_match('/^'.$route.'$/', $url, $matches);

    if (!empty($matches)){
        $controller = new $item[0];
        $controller->{$item[1]}();
        break;
    }

}

DB::getConnection();
var_dump(\App\Models\User::findById('1'));
