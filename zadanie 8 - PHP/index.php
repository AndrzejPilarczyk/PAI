<?php

//zad15
/*
for($i=1; $i <= 1000; $i++){
    if($i%3==0){
        echo $i;
        echo "<br>";
    }

    if($i%7==0){
        echo $i;
        echo "<br>";
    }
}
    */

//zad16
/*
for($i=1; $i <= 1000; $i++){
    if($i%3!=0){
        echo $i;
        echo "<br>";
    }

}
    */

//zad17
/*
$n = 0;
for($i=0;$i<20;$i++){
    $n += 1;
    if($n%3==0){
        echo $n;
        echo "<br>";
    }
}
    */

//zad19
/*
$array = [1,4,3,6,8,9,2];
$max=0;
foreach($i=0;$i<;){

}

*/

//szachy
/*
for($i=0; $i<4; $i++){
    echo "XOXOXOXO";
    echo "<br>";
    echo "OXOXOXOX";
    echo "<br>";
}*/

//tablica mnożenia
$linie = 10;
$kolumny = 10;

for ($i = 1; $i <= $linie; $i++) {
    for ($j = 1; $j <= $kolumny; $j++) {
        echo $i * $j . " ";

    }
    echo "<br>";
}
?>