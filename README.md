# DESAFIO AMIGO SECRETO

Um projeto em PHP utilizando o padrão MVC, onde contém:

-Cadastro de pessoas (nome, email)
-Edição e exclusão usuário
-Realização de um sorteio das pessoas e combinação dos pares
-Gerador de PDF com os pares do amigo secreto

## 🚀 Como iniciar o projeto?


### 📋 Pré-requisitos

```
Xampp ou qualquer outro gerenciador MySql
```

### 🔧 Inicialização projeto:

Siga os passos:

```
Abra o arquivo database e altere a função __construct() para os dados do seu localhost;
Dentro da pasta terá um arquivo sql (desafio.sql) com as tabelas prontas, basta inserir no seu banco;

Após fazer as devidas alterações, inicie o xampp startando o MySql e Apache (Caso utilize ele para o banco);

Após Xampp startando abra o projeto e de um:
php -S localhost:8000   

Para iniciar no navegador basta acessar: localhost:8000 
```

###  Páginas disponiveis:
```
HOME =  http://localhost:8000/listarpessoas
CADASTRO = http://localhost:8000/cadastro
SORTEIO = http://localhost:8000/sorteio
GERAR PDF = http://localhost:8000/gerarPDF


```

###  Desafios enfretados e funcionalidades adicionais:
    A parte do gerar as combinações dos nomes puxando do banco de dados foi um desafio para mim,
    levei um tempo para chegar ao código atual mas deu super certo. Mas neste teste consegui,
    desenvolver mais a prática do modelo MVC e também a lógica.

    Fiz um gerador de PDF, onde o usuário na página de sorteio pode clicar no botão pata baixar,
    esse PDF tem os nomes que saíram no sorteio do amigo secreto.


 ###  Prints de como está cada página:
    Dentro da pasta IMG terá um print com cada página e sua exibição;



