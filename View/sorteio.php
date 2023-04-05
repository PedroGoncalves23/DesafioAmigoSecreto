<?php
include 'header.php';


error_reporting(0);

// SHUFFLE MISTURA O NOMES
shuffle($model->rows);

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
                <a class='btn btn-info' href='/sorteio' >Refazer</a>
                <div class="mb-3 text-center" style='padding-top: 15px'>
            <a class='btn btn-info' href='/gerarPDF' role='button'>Baixar PDF com sorteio aleatorio</a>
        </div>

               </div>
                    <div class="mb-3">
                    <table class='table table-hover table-striped table-bordered'>
                           <th>Nomes:</th>
                         <?php foreach($a as $aa):
                              print "<tr>";
                              print "<td>".implode(" saiu com ",$aa)."</td>";
                              print "<tr>"; 
                        endforeach; ?>
                      </table>
                    </div>
            </div>
        </div>
</div>

