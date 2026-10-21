<?php

$numero = rand(1,100);
$tentativa = 0;
while ($tentativa != $numero){
    $tentativa = readline("Digite\n");

 if($numero> $tentativa)
        {
echo"tente um maior\n"
;}
elseif($numero< $tentativa)
    {
        echo"tente um menor\n";
        }
        else{echo "ACERTOU!!";}
  
}

 



?>