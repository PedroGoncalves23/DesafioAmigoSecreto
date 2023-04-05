<?php

    class database {

        private $conexao;
        public function __construct()
        {
            $dsn = "mysql:host=localhost;dbname=desafio";

            $this->conexao = new PDO($dsn, 'root', '');        
        }

        public function insert(PessoaModel $model)
        {
            $sql = "INSERT INTO pessoa (nome,email) VALUES (?,?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);

            $stmt->execute();
            }

        public function select()
        {   
            $sql = "SELECT * FROM pessoa";

            $pesquisa = @$_GET['pesquisar'];

            if (empty($pesquisa) === false) {
                $sql = "SELECT * FROM pessoa WHERE nome LIKE :pesquisa ORDER BY id DESC";
            }

            $stmt = $this->conexao->prepare($sql);
           
            if(empty($pesquisa) === false) {
                $query = '%' . $pesquisa . '%';
                $stmt->bindParam(':pesquisa', $query);
            }

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        public function edit(PessoaModel $model)
        {
            $sql = "UPDATE pessoa SET nome=?, email=? WHERE id=?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->id);


            $stmt->execute();
            
        }

        public function selectById(int $id)
        {
            include_once 'Model/PessoaModel.php';
    
            $sql = "SELECT * FROM pessoa WHERE id = ?";
    
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
    
            return $stmt->fetchObject("PessoaModel"); // Retornando um objeto específico PessoaModel
        }

        public function sorteio()
        {

            $sql = "SELECT nome FROM pessoa";
            $stmt = $this->conexao->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        public function delete(int $id) {
            $sql = "DELETE FROM pessoa WHERE id = ? ";
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $id);
            $stmt->execute();


            
        }
    }
