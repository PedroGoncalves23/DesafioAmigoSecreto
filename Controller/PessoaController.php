<?php

class PessoaController{
    public static function index(){
        include 'View/index.php';
    }

    public static function save()
    {
        include 'Model/PessoaModel.php';

        $model= new PessoaModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];

        $model->save();
    }

    public static function listar()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        $model->getAllRows();

        include 'View/exibirPessoa.php';
    }

    public static function edit()
    {
        include 'Model/PessoaModel.php';

        $model= new PessoaModel();

        if(isset($_GET['id'])) // Verifica se existe um id para editar ou se é um novo usuario
        {
            $model = $model->getById((int)$_GET['id']); 

        }
        include 'View/index.php';
    }
}