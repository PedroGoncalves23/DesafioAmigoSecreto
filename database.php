<?php
    class database {
        private $conexao;
        // CONSTRUCT INICIANDO A CONEXÃO COM O BANCO
        public function __construct()
        {
            $dsn = "mysql:host=localhost;dbname=desafio";

            $this->conexao = new PDO($dsn, 'root', '');        
        }

        // INSERINDO OS DADOS USUÁRIOS BANCO
        public function insert(PessoaModel $model)
        {
            $sql = "INSERT INTO pessoa (nome,email) VALUES (?,?)";

            $stmt = $this->conexao->prepare($sql);

            // bindValue RECEBE O VALOR QUE SERÁ INSERIDO
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->execute();
            }

            // REALIANDO O SELECT NO BANCO
        public function select()
        {   
            // REALIZA O SELECT COM TODOS OS DADOS DOS USUARIOS
            $sql = "SELECT * FROM pessoa";

            $pesquisa = @$_GET['pesquisar'];

            // REALIZANDO A PESQUISA PELO NOME OU EMAIL
            // CASO O GET PESQUISA TENHA VALOR ENTÃO ELE REALIZA UM SELECT COM WHERE COM OQUE FOI PASSADO NA PESQUISA
            if (empty($pesquisa) === false) {
                $sql = "SELECT * FROM pessoa WHERE nome or email LIKE :pesquisa ORDER BY id DESC";
            }

            $stmt = $this->conexao->prepare($sql);
           
            // AQUI ELE SEGUE O MESMO ID DO DE CIMA, PORÉM AQUI ELE DA UM BIND NA PALAVRA DE PESQUISA
            if(empty($pesquisa) === false) {
                $query = '%' . $pesquisa . '%';
                $stmt->bindValue(':pesquisa', $query);
            }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        // FUNÇÃO EDITAR USUÁRIO
        public function edit(PessoaModel $model)
        {
            $sql = "UPDATE pessoa SET nome=?, email=? WHERE id=?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->id);

            $stmt->execute();
            
        }

        // AQUI ELE PEGA O ID USUÁRIO
        public function selectById(int $id)
        {
            include_once 'Model/PessoaModel.php';
    
            $sql = "SELECT * FROM pessoa WHERE id = ?";
    
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
    
            return $stmt->fetchObject("PessoaModel"); // Retornando um objeto específico PessoaModel
        }

        // FUNÇÃO SORTEIO ONDE REALIZA UM SELECT PARA EXIBIR O NOME
        public function sorteio()
        {
            $sql = "SELECT nome FROM pessoa";
            $stmt = $this->conexao->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // FUNÇÃO PARA DELETAR UM USUÁRIO
        public function delete(int $id) {
            $sql = "DELETE FROM pessoa WHERE id = ? ";
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }