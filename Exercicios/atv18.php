<?php

$frase = ["João é um desenvolvedor PHP", "Programação é legal", "PHP é uma linguagem de programação","Laravel Lovers"];

foreach ($frase as $frase) {
  if(strlen($frase) > 20){
    echo substr($frase, 0, 20) . "...\n";
  }
  else{
    echo $frase . PHP_EOL;
  }

}

?>
