<?php include 'header.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php


error_reporting(0);
shuffle($model->rows);

$qtd = count($model->rows);


foreach ((array)$model->rows as $user) {
   
       $nome[] = $user['nome']; 
}

   $a = array();
   for($i = 0; $i < count($nome); $i += 2){
      $a[] = array($nome[$i], $nome[$i+1]); 
    //  echo $nome[$i];  
   }

//   echo "tamanho: ". count($a);

?> 
<div class="container">
        <div class="row">
            <div class="col mt-5">

                <h1 class="mb-3 row d-flex justify-content-center">Sorteio amigo secreto</h1>
                <div class="mb-3 row d-flex justify-content-center">
                <a class='btn btn-primary' href='/sorteio' >Refazer</a>

               </div>
                    <div class="mb-3">
                    <table class='table table-hover table-striped table-bordered'>
                           <th>Nomes:</th>
                         <?php foreach($a as $aa):
                              print "<tr>";
                              print "<td>".implode(" com ",$aa)."</td>";
                              print "<tr>"; 
                        endforeach; ?>
                      </table>
                    </div>
            </div>
        </div>
</div>



