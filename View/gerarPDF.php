<?php


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

$html = "<body style='color: black;'>";
$html .= "<div class='container'>";
$html .=  "<div class='row'>";
$html .=  "<div class='col mt-5'>";
$html .=   "<h1 class='mb-3 row d-flex justify-content-center'>Sorteio amigo secreto</h1>";
$html .=   "<div class='mb-3 row d-flex justify-content-center'>";
$html .=     " </div>";
$html .=     "<div class='mb-3'>";
$html .=      "<table class='table table-hover table-striped table-bordered'>";
$html .=     "<h2>Sorteados:</h2>";
              foreach($a as $aa):
$html .="<tr>";
$html .="<td style='border: 1px solid #ccc; padding: 5px; font-size: 30px;'>".implode(" saiu com ",$aa)."</td>";
$html .="<tr>"; 
            endforeach;
$html .= "</table>";
$html .= "</div>";
$html .= "</div>";
$html .= "</div>";
$html .= "</div>";
$html .= "</body>";

use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';


$dompdf = new Dompdf();



$dado =  "<h1>Nome</h1>";

$dompdf->loadHtml($html);

$dompdf->set_option("defaultFont", "sans");
$dompdf->setPaper("A4", 'portrait');

$dompdf->render();

$dompdf->stream(
);

?>