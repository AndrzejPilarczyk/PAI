<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="nav.php" class="<?= $currentPage == 'nav.php' ? 'active' : ''?>">Wróć</a>
 <form method="POST" action="">

    <label for="tytul">Tytuł</label>
    <input type="text" id="tytul" name="tytul"><br>

    <label for="gatunek">Gatunek</label>
    <input type="text" id="gatunek" name="gatunek"><br>

    <label for="platforma">Platforma</label>
    <input type="text" id="platforma" name="platforma"><br>

    <label for="rok_wydania">Rok wydania</label>
    <input type="number" id="rok_wydania" name="rok_wydania"><br>

    <label for="ocena">Ocena</label>
    <input type="decimal" id="ocena" name="ocena"><br>  

        <button type="submit">Zaktualizowano</button>
    </form>
</body>
</html>

<?php

$conn;

    if(isset($_POST["tytul"]) && isset($_POST["gatunek"]) && isset($_POST["platforma"]) && isset($_POST["rok_wydania"]) && isset($_POST["ocena"])){

    $tytul = $_POST["tytul"];
    $gatunek = $_POST["gatunek"];
    $platforma = $_POST["platforma"];
    $rok_wydania = $_POST["rok_wydania"];
    $ocena = $_POST["ocena"];

    $sql = "UPDATE `gry` SET `tytul`='$tytul',`gatunek`='$gatunek',`platforma`='$platforma',`rok_wydania`='$rok_wydania',`ocena`='$ocena' WHERE 1";

    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    }
?>