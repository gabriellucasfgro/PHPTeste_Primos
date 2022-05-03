<?php

function primos(int $inicial, int $final) {
    $primos = array();

    for($i = $inicial; $i < $final; $i++) {
        for($j=2; $j < $i; $j++) {
            if($i % $j == 0){
              $primo = false;
              break;
            }else{
              $primo = true;
            }
        }
        if($primo) {
            array_push($primos, $i);
        }
    }

    return $primos;
}


$primos = primos(10, 29);
foreach($primos as $primo) {
    echo $primo." ";
}

?>