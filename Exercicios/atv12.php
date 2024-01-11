<?php
$myarray = [1,2,3,4,5,6];

$i= 0 ;
while($i < sizeof($myarray)){
    if($i%2 === 0){
        echo $myarray[$i].PHP_EOL;
    }
    $i++;
}
$i= 0 ;
while($i < sizeof($myarray)){
    if($i%2 != 0){
        echo $myarray[$i].PHP_EOL;
    }
    $i++;
}
?>