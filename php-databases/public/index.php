<?php

require("../vendor/autoload.php");

use App\Controller\IncomesController;
use App\Controller\WithdrawalsController;
use Router\RouterHander;

// obtener la URL
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slog[1] ?? null;

// instancia del router

$router = new RouterHander(); 

switch ($resource) {
    case '/':
        echo "Estas en la front page";
        break;
    
    case 'incomes':
        
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(IncomesController::class, $id);

        break;

    case 'withdrawals':

        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(WithdrawalsController::class, $id);

        break;

    default:
       echo "404 Not Found";
        break;
}