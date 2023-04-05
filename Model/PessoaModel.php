<?php

class PessoaModel
{
    public $id, $nome, $email;

    public $rows;

    public function save()
    {
        include 'database.php';

        $dt = new database();
    
            if(empty($this->id)) {
                $dt->insert($this);
    
                //APÓS CLICAR NO BOTÃO SALVAR ELE REDIRECIONA PARA A PÁGINA DE LISTAGEM
                echo "<script>alert('Registro incluído com sucesso!');document.location='/listarpessoas'</script>";
                
            }else{
                $dt->edit($this);
    
                //APÓS CLICAR NO BOTÃO SALVAR ELE REDIRECIONA PARA A PÁGINA DE LISTAGEM
                echo "<script>alert('Registro editado com sucesso!');document.location='/listarpessoas'</script>";
            } 
    }

    public function getAllRows()
    {
        include 'database.php';

        $dt = new database();

        $this->rows = $dt->select();

    }

    public function edit()
    {
        include 'database.php';

        $dt = new database();

        $dt->edit($this);

    }

    public function getById(int $id)
    {
        include 'database.php'; 

        $dt = new database();
        $obj = $dt->selectById($id); 
        
        if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }
    }

    public function sorteio()
    {
        include 'database.php';

        $dt = new database();

        $this->rows = $dt->sorteio();
    }

    public function delete(int $id)
    {
        include 'database.php';

        $dt = new database();

        $dt->delete($id);
    }
}