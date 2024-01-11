<?php

  $email = " ";

  while($email != ""){

    $email = readline("Digite um email: ");
    
    if($email === ""){
      break;
    }elseif(str_contains($email, '@') && str_contains($email, '.com') ){
      
      file_put_contents('emails.txt', $email .PHP_EOL, FILE_APPEND);
  
    }else{
    if (!file_exists("lixo")) {
        mkdir("lixo");
    }
      
      file_put_contents('lixo/outros.txt', $email .PHP_EOL, FILE_APPEND);
      echo "Email inválido, tente novamente.\n";
      
    }
  }

?>
