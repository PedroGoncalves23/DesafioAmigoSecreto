<?php

class PessoaController{
    public static function index(){
        header("Location: /listarpessoas");

    }

    public static function error404(){
        require_once('View/error404.php');

    }

    // FUNÇÃO QUE SALVA OS DADOS NO BANCO
    public static function save()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];

        $model->save();
    }

    // FUNÇÃO PARA LISTAR OS USUÁRIOS
    public static function listar()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        // GETALLROWS() obtém todas as linhas ta tabela
        $model->getAllRows(); 
        include 'View/exibirPessoa.php';
    }

    // FUNÇÃO EDITAR ALGUMA INFORMAÇÃO USUÁRIO
    public static function edit()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        if(isset($_GET['id'])) 
        {
            $model = $model->getById((int)$_GET['id']); 
        }
        include 'View/cadastroPessoa.php';
    }

    // FUNÇÃO SORTEIO DO AMIGO SECRETO
    public static function sorteioo()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        $model->sorteio();
        require_once('View/sorteio.php');
    }

    // FUNÇÃO DELETA USUÁRIO
    public static function delete()
    {
        include 'Model/PessoaModel.php';
        $model= new PessoaModel();

        $model->delete((int) $_GET['id']);
        header("Location: /listarpessoas");
    }
}