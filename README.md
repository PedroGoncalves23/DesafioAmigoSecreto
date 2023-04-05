# DESAFIO AMIGO SECRETO

Um projeto em PHP utilizando o padrão MVC, onde contém:

-Cadastro de pessoas (nome, email)
-Edição e exclusão usuário
-Realização de um sorteio das pessoas e combinação dos pares
-Gerador de PDF com os pares do amigo secreto

## 🚀 Como iniciar o projeto?


### 📋 Pré-requisitos

De que coisas você precisa para instalar o software e como instalá-lo?

```
Xampp ou qualquer outro gerenciador MySql
```

### 🔧 Inicialização projeto:

Uma série de exemplos passo-a-passo que informam o que você deve executar para ter um ambiente de desenvolvimento em execução.

Diga como essa etapa será:

```
Abra o arquivo database e altere a função __construct() para os dados do seu localhost
Dentro da pasta terá um arquivo sql com as tabelas prontas, basta inserir no seu banco

Após fazer as devidas alterações, inicie o xampp startando o MySql e Apache (Caso utilize ele para o banco)

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
