<?php

$qtdConvidados = (int) readline("Quantas pessoas deseja convidar?\nR: ");

    if( $qtdConvidados > 0){
        $convidados = [];
    
        for($i = 0; $i < $qtdConvidados; $i++){
            $convidados[] = readline("Digite o nome do convidado: ");
        }
        
            echo "\n\nos Convidados foram:\n";
        foreach($convidados as $convidado){
            echo "{$convidado}\n";
        }
    }else{
        echo "Zero pessoas convidadas com sucesso :D\n";
    }
?>
