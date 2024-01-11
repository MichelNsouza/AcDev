<?php

$meuArray = [10,25,37,44,51];

$dobro = true;

if($dobro){
    for($i=0;$i<5;$i++){
        $meuArray[$i] *= 2;
    }
}
print_r($meuArray);

?>