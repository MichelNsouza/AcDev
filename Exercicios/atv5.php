<?php

$precoProduto1 = 10.50;
$precoProduto2 = 20.90;

if($precoProduto1 > $precoProduto2){
    echo "Produto 1 é mais caro!";
}elseif($precoProduto1 < $precoProduto2){
    echo "Produto 2 é mais caro!";
}else{
    echo "Os produtos têm o mesmo preço!";
}

?>