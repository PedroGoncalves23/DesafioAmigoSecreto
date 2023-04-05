<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {
    case '/':
        PessoaController::index();
    break;

    case '/cadastro':
        PessoaController::edit();
    break;

    case '/cadastro/save':
        PessoaController::save();
    break;

    case '/listarpessoas':
        PessoaController::listar();
    break;

    case '/sorteio':
        PessoaController::sorteioo();
    break;

    case '/listarpessoas/delete':
        PessoaController::delete();
    break;

    case '/gerarPDF':
        PessoaController::pdf();
    break;

    

    default:
        PessoaController::error404();
    break;

}


