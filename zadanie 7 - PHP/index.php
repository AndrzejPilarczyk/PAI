<?php
    $array = [1,2,3,4,5];
    $array2 = [6,7,8,9,10];

    /*
    printArray($array);
    printArray($array2);
    echo sumNumbers(6);
    echo "<br>";
    echo multiplyNumbers(9,10);
    echo "<br>";
    echo multiplyNumbers(9);
    echo "<br>";
    echo zamienNaWielkie("mango");
    echo "<br>";*/
    echo "<br>";
    echo czyPierwsza(8);
    echo wypiszLiczbyPierwszeZZakresu(6,67);

    //funkcja
    function printArray($array){
        for($i = 0; $i < count($array); $i++){
            echo $array[$i];
        }
        echo "<br>";
    }

    //zmienna liczba argumentów
    function sumNumbers(...$array){
        $sum = 0;
        for($i = 0; $i < count($array); $i++){
            $sum = $sum + $array[$i];
        }
        return $sum;
    }


    //wartość domyślna
    //int w parametrach - jakiego typu są przyjmowane parametry
    //int po dwukropku (na końcu sygnatury funkcji) oznacza
    //typ zwracany przez funkcję
    function multiplyNumbers(int $a, int $b = 9): int{
        return $a * $b;
    }

    function zamienNaWielkie(string $tekst): string{
        return strtoupper($tekst);
    }

    function czyPierwsza(int $n): bool{

        if($n < 2){
            return false;
        }

        for($i = 2; $i <= sqrt($n); $i++){
            if(($n % $i) == 0){
                return false;
            }
        }
        return true;
    }

    function wypiszLiczbyPierwszeZZakresu($początek, $koniec){
        for($i = $początek; $i <= $koniec; $i++){
            if(czyPierwsza($i)){
                echo $i;
                echo "<br>";
            }
        }
    }

    function obliczStatystyki(array $liczby): array{
        function min(){

        }

        function max(){
            
        }

        function średnia(){
            
        }

        function suma(){
            
        }
    }

?>