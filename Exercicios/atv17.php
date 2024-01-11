<?php
$frutas = ["jaca", "melancia", "banana-da-terra", "fruta-pão", "graviola"];

foreach($frutas as $fruta){
    if(str_contains($fruta, "-")){
        echo "{$fruta} (palavra composta)\n";
    }else{
        echo $fruta . PHP_EOL;
    }
}