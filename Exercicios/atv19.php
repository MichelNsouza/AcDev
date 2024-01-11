<?php

$nome = readline("Digite seu nome: ");
$sobreNome = readline("Digite seu sobrenome: ");
$cpf = readline("Digite seu CPF: ");
$cpfSub = substr($cpf, 0, 3);
echo "olá {$nome} {$sobreNome}! Os 3 primeiros digitos seu CPF é {$cpfSub}.\n";


?>
