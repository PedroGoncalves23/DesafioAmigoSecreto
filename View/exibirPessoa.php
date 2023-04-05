<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col mt-2">
            <h1 class="mb-3 row d-flex justify-content-center">Lista usuários</h1>
        </div>
        <div class="mb-3">

            <!-- INPUT PESQUISA PODE SER PELO NOME OU EMAIL -->
            <form method='GET' action='/listarpessoas' class='d-flex justify-content-center'>
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="search" id="pesquisar"
                        name="pesquisar">
                    <span class="input-group-append">
                        <button type='submit' class='btn btn-success'
                            style="border: solid 1px; border-radius: 40px 40px 40px 40px; margin-left: 5px">Pesquisar</button>
                        <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>

       <!-- : BOTÕES PARA REALIZAR O SORTEIO OU CRIAR UM NOVO USUÁRIO -->
        <div class="mb-3 text-center">
            <a class='btn btn-info' href='/sorteio' role='button'>Realizar sorteio</a>
            <a class='btn btn-info' href='/cadastro' role='button'>Cadastrar novo usuário</a>
        </div>
    </div>
</div>


<!-- AQUI COMEÇA A PARTE DE EXIBIÇÃO DADOS PUXANDO DO BANCO DADOS -->
<?php
print "<div class='container'>";
    print "<div class='row'>";
        print "<div class='col mt-5'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Email</th>";
                print "<th>Ações</th>";
                print "<tr>";


                // FORARCH PERCORRENDO PELAS LINHAS TA TABELA E EXIBINDO TODOS USUÁRIOS
                foreach($model->rows as $item):
                    print "<tr>";
                    print "<td style='color: white;'>".$item->id."</td>";
                    print "<td style='color: white;'>".$item->nome."</td>";
                    print "<td style='color: white;'>".$item->email."</td>";
                
                // ENVINDO O USUARIO PARA O FORMULARIO EDIÇÃO OU EXCLUSÃO
                    print "<td> 
                        <button onclick=\"location.href='cadastro?id=".$item->id."';\" class='btn btn-primary'>Editar</button>
                        <button onclick=\"if(confirm('Deseja excluir mesmo?')){location.href='listarpessoas/delete?id=".$item->id."';}else{false}\" class='btn btn-danger'>EXCLUIR</button>
                          </td>";    
                    print "<tr>";
                endforeach;

            print "</table>";
        print "</div>";
    print "</div>";
print "</div>";
?>