<?php

$frase = "O rato roeu a roupa do rei de Roma\n";
echo $frase;

$substituir = readline("Informe a palavra que deseja substituir: ");

$novaPalavra = readline("Informe a nova palavra: ");

$frase = str_replace($substituir, $novaPalavra, $frase);

echo $frase .PHP_EOL;


?>
