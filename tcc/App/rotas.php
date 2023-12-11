<?php
include_once 'Controller/ProdutoController.php';
include_once 'Controller/LoginController.php';
include_once 'Controller/HomeController.php';
include_once 'Controller/DestinoController.php';

//pegar a url que o usuario esta tentando acessar
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// $url = explode("/", $url);
// $url = "/" . end($url);

// $base = "/tcc/App/index.php";


//pelo cmd ou terminal entrar na pasta htdocs tcc app e digitar: \xampp\php\php.exe -S localhost:8000

switch ($url) {
    case '/':
        header("Location: /home");
        break;

    case '/home':
        HomeController::home();
        break;

    case '/destination':
        DestinoController::destino();
        break;

    case '/login':
        LoginController::index();
        break;

    case '/login/validar':
        LoginController::check();
        break;

    case '/produto':
        ProdutoController::index();
        break;

    case '/produto/form':
        ProdutoController::form();
        break;


    case '/produto/form/save':
        ProdutoController::save();
        break;

    case '/produto/atualizar':
        ProdutoController::formatt();
        break;

    case '/produto/atualizar/save':
        ProdutoController::atualizar();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;

    case '/produto/deleteimg':
        ProdutoController::deleteimg();
        break;

    default:
        echo "Erro 404";
        break;
}
