<?php
$preco = [2.5,3.5,3.99];
$quantidade = [1.5,2.5,3.5];

for($i = 0; $i < sizeof($preco); $i++ ){
    echo $preco[$i] * $quantidade[$i]  .PHP_EOL;
}
?>