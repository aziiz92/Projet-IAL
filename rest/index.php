<?php
/**
 * App front controller and router
 */

require "bootstrap.php";
require_once 'src/Controller/ArticleController.php';
require_once 'src/Controller/CategoryController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
    case 'posts':
        if (isset($_GET['id'])) {
            $controller = new ArticleController(
                $db,
                $_SERVER["REQUEST_METHOD"],
                $_GET['id']
            );
        } elseif (isset($_GET['category'])) {
            $controller = new ArticleController(
                $db,
                $_SERVER["REQUEST_METHOD"],
                null,
                $_GET['category']
            );
        } else {
            $controller = new ArticleController($db, $_SERVER["REQUEST_METHOD"]);
        }
        $controller->processRequest();
        break;
    case 'categories':
        if (isset($_GET['id'])) {
            $controller = new CategoryController(
                $db,
                $_SERVER["REQUEST_METHOD"],
                $_GET['id']
            );
        } else {
            $controller = new CategoryController($db, $_SERVER["REQUEST_METHOD"]);
        }
        $controller->processRequest();
        break;

    default:
        header('HTTP/1.1 404 Not Found');
        echo json_encode(['code' => 404, 'message' => 'No route found!']);
        break;
    }
} else {
    echo "Vous devez indiquer l'action que vous voulez: ?action=posts, ?action=categories, ?action=posts&id=1.";
}
