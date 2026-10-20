<?php

$notas = 1;
$soma = 0;
while($notas <= 5){
    $nota = readline("digite\n");
    $soma = $soma + $nota;
    echo"$soma\n";
    $notas++;
    
}


?>