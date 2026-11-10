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
    <form method="POST" action="">

        <label for="id">ID</label>
        <input type="number" id="id" name="id"><br>       

        <button type="submit">oblicz</button>
    </form>
</body>
</html>

<?php
    $conn;

    if(isset($_POST["id"])){


    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];

    //Tabela Products
    //pola: id, name, price, amount

    $sql = "DELETE FROM `products` WHERE `id`= '$id'";

    $result = mysqli_query($conn, $sql);

    //wykonuje zapytanie na bazie danych na podstawie podanego SQLa oraz połączenia z BD
    if($result){
        echo "Usunięto rekord o id: ".$id;
    } else {
        //mysqli_error - wyciąga błąd z połączenia
        echo "Błąd aktualizacji: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>