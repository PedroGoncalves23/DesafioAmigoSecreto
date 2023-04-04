<h1>Listar Usuários</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

print"<form method='GET' action='/listarpessoas'>";
print "Pesquisar:<input type='text' id='pesquisar' name='pesquisar' placeholder='PESQUISAR'>";
print "<button type='submit' class='btn btn-success'>Enviar</button>";
print "</form>";


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

        foreach($model->rows as $item):
            print "<tr>";
            print "<td>".$item->id."</td>";
            print "<td>".$item->nome."</td>";
            print "<td>".$item->email."</td>";
            print "<td>";    
            
            // HREF ENVINDO O USUARIO PARA O FORMULARIO EDIÇÃO
            print "<a class='btn btn-primary' href='/pessoa?id=$item->id' role='button'>EDITAR</a>";
            print "<tr>";
        endforeach;

        print "</table>";
print "</div>";
print "</div>";
print "</div>";
?>

<!-- <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'listarpessoas?search='+search.value;
    }
       </script> -->