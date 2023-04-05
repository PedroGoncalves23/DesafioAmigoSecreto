<?php

class PessoaModel
{
    public $id, $nome, $email;
    public $rows;

    // FUNÇÃO SALVA OS DADOS USUARIO
    public function save()
    {
        include 'database.php';

        $dt = new database();

        // IF VERIFICA SE EXISTE UM ID 
        // CASO NÃO TENHA SIGNIFICA QUE SERÁ UM INSERT
        // CASO TENHA ENTÃO SERÁ UM UPDATE
        if (empty($this->id)) {
            $dt->insert($this);
            //APÓS CLICAR NO BOTÃO SALVAR ELE REDIRECIONA PARA A PÁGINA DE LISTAGEM
            echo "<script>alert('Registro incluído com sucesso!');document.location='/listarpessoas'</script>";
        } else {
            $dt->edit($this);
            //APÓS CLICAR NO BOTÃO SALVAR ELE REDIRECIONA PARA A PÁGINA DE LISTAGEM
            echo "<script>alert('Registro editado com sucesso!');document.location='/listarpessoas'</script>";
        }
    }

    // RETORNA TODAS LINHAS DA TABEL BD
    public function getAllRows()
    {
        include 'database.php';
        $dt = new database();
        $this->rows = $dt->select();
    }

    // FUNÇÃO EDITAR
    public function edit()
    {
        include 'database.php';
        $dt = new database();
        $dt->edit($this);
    }

    // AQUI ELE PEGA O ID QUE SERÁ USADO PARA EDITAR O USUARIO
    public function getById(int $id)
    {
        include 'database.php';
        $dt = new database();
        $obj = $dt->selectById($id);
        if ($obj) {
            return $obj;
        } else {
            return new PessoaModel();
        }
    }

    // FUNÇÃO SORTEIO
    public function sorteio()
    {
        include 'database.php';
        $dt = new database();
        $this->rows = $dt->sorteio();
    }

    //FUNÇÃO DELETAR USUÁRIO
    public function delete(int $id)
    {
        include 'database.php';
        $dt = new database();
        $dt->delete($id);
    }
}