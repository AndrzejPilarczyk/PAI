<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form method="GET" action="">
        <label for="name">Imie</label>
        <input type="text" id="name" name="name"><br>
        <button type="submit">Wyślij</button>
    </form>
    <BR>

    <form method="POST" action="">
        <label for="age">Wiek</label>
        <input type="number" id="age" name="age"><br>
        <button type="submit">Wyślij</button>
    </form>
-->

    <form method="POST" action="">
        <label for="name">Nazwa produktu</label>
        <input type="text" id="name" name="name"><br>

        <label for="price">Cena jednego produktu</label>
        <input type="number" id="price" name="price"><br>

        <label for="amount">Liczba zakupionych sztuk</label>
        <input type="number" id="amount" name="amount"><br>

        <button type="submit">oblicz</button>
    </form>
</body>
</html>

<?php
/*
if(isset($_GET['name'])){
    $imie = $_GET['name'];
    echo "Imie: $imie <br>";
}

if(isset($_POST['age'])){
    $wiek = $_POST['age'];
    echo "Wiek: $wiek";
}
    */
    if(isset($_POST['name'])){
        $nazwa = $_POST['name'];
        echo "Nazwa: $nazwa <br>";
    }

    if(isset($_POST['price'])){
        $cena = $_POST['price'];
        echo "Cena: $cena <br>";
    }

    if(isset($_POST['amount'])){
        $liczba = $_POST['amount'];
        echo "Liczba: $liczba <br>";
    }

    $obliczenie = $cena * $liczba;
    echo "Łączny koszt: $obliczenie";

?>