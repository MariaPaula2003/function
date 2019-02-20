<?php

$vetor = array();
$soma = 0;
$maior = 0;
$posi = 0;
 
for ($i = 0; $i <= 30; $i++){
    $vetor[$i] = $i;
    
    if($vetor[$i]> $maior){
        $maior = $vetor[$i] ;
        $posi = $i;
    }
    
    $soma = $vetor[$i] + $soma;
    
    $media = $soma / count($vetor);
}

echo 'O maior número é: '. $maior. ' Encontrado na posição: '. $posi . '<br>';
echo 'A soma de todos os valores é: '.$soma. '<br>';
echo 'A média dos valores do vetor é ='.$media. '<br>';

