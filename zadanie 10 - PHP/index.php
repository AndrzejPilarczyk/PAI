<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <!-- skrypt w tym samym pliku -->
    <form action="./" method="POST">
        <label for="name"> Imię: </label>
        <input type="text" id="name" name="name"><br>

        <label for="age"> Wiek: </label>
        <input type="number" id="age" name="age"><br>

        <label for="sex">Płeć: </label>
        <input type="radio" name="sex" value="k"> kobieta
        <input type="radio" name="sex" value="m"> mężczyzna
        <br>

        <label for="game">Ulubiona seria gier: </label><br>
            <input type="checkbox" name="game1" value="GTA"> GTA<br>
            <input type="checkbox" name="game1" value="FIFA"> FIFA<br>
            <input type="checkbox" name="game1" value="CS"> CS<br>
            <input type="checkbox" name="game1" value="RE"> Resident Evil<br>
            <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && //czy klucz istnieje
    isset($_POST['age']) && 
    !empty($_POST['name'] && //czy jest wartość
    !empty($_POST['age']))){

    
    echo $_POST['name'];
    echo $_POST['age'];
} else {
    echo "Prosze wypełnić wszystkie pola.";
}

    if(isset($_POST['sex'])){
        if($_POST['sex'] == 'm'){
            echo "<br>";
            echo "Mężczyzna";
        } else {
            echo "<br>";
            echo "Kobieta";
        }
    }

    if(isset($_POST['game1']) && $_POST['game1'] == "GTA"){
        echo "<br>";
        echo "Wybrano GTA";
    }

    for($i = 1;$i <= 4 ;$i++){
        if(isset($_POST['game1'.$i])){
        echo "<br>";
        echo $_POST['game'.$i];
    }
    }
?>