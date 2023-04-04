<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {
    case '/':
        echo "Página inicial";
    break;

    case '/pessoa':
        PessoaController::edit();
    break;

    case '/index':
        PessoaController::index();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/listarpessoas':
        PessoaController::listar();
    break;
}


