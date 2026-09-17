<?php
/*
    //for
    for($i = 0; $i < 10; $i++){
        echo $i;
    }

    //while
    $i = 0;
    while($i < 5){
        echo $i;
        $i++;
    }

    //do-while
    $i = 1;
    do{
        echo $i;
        $i++;
    } while($i <= 5);

    //foreach
    $tablica = [1,2,3,4,5];
    foreach($tablica as $wartosc){
        echo $wartosc;
    }

    $owoce = [
        "a" => "jabłko",
        "b" => "banan",
        "c" => "gruszka"
    ];

    foreach($tablica as $klucz => $wartosc){
        echo "Klucz: ".$klucz." wartość: ".$wartosc;
    }

    $array = [1,2,3];
    $assoc_table = ["imie"=>"Ania", "wiek"=>30];
    $empty_array = [];
    $array2 = array(1,2,3);

    $arrayOfNumbers = [1,2,3];
    for($i = 0; $i < count($arrayOfNumbers); $i++){
        echo $arrayOfNumbers[$i];
    }

    //wstawianie jednego elementów

    $number = 10;
    $insertArray = [1,2,3];
    $insertArray[1] = $number;

    //wstawianie elementu do całej tablicy

    $number = 10;
    $insertArray = [1,2,3];
    for($i = 0; $i < count($insertArray); $i++){
        $insertArray[$i] = $number;
    }
    echo "<br>";
    echo var_dump($insertArray);

    //wstawianie elementów pod wybrany index
    $number = 10;
    $index = 0;
    $insertArray = [1,2,3];
    $insertArray[$index] = $number;

    */

    for($i = 0; $i < 100;){
    echo $i +=2;
    }
    echo "<br>";

    for($i = 100; $i > 1;){
    echo $i -=4;
    }

?>