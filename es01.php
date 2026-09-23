<?php

    echo 'ciao <br>';
    $numero = 99;

    echo 'numero: ' . $numero . '<br>';
    echo 'numero: ' . $numero*3+2 . '<br>';

    $numero = '5ai';
    echo 'La mia classe preferita è : ' .$numero;

    
    //arr = array associativo come un dizionario, man mano che aggiungo chiavi gli assegna un valore
    $arr = ['votomax' => 8, 'Gjini', 'Tornatola', 102 => 'Silvestri', 'abc' => 'Singh', 'Gallizioli'];
    print_r($arr);


    
    echo $arr['0'];

    //controlli per debug
    var_dump($arr);
    print_r($arr);

    $numero = 103; 
    //costrutti base
    if($numero > 100){
        echo 'numero grande';
    }else{
        echo 'numero piccolo';
    }

    //ciclo for

    for($i = 0; $i<8; $i++){
        echo '🍕';
    }

    for($k = 0; $k<50; $k++){
        echo $k;
    }

    for($j = 0; $j<10; $j++){
        if($j%2 == 0){
            echo '.';
        }else{
            echo '🤘';
        }
    }
?>