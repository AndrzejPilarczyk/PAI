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
    $conn;

    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"]) && isset($_POST["id"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";
    

    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];

    //Tabela Products
    //pola: id, name, price, amount

    $sql = "UPDATE `products` SET 
            `name` = ".$name.",
            `price` = ".$price.",
            `amount` = ".$amount."
            WHERE `id` = ".$id;

    $sql = "UPDATE `products` SET `name`='$name',`amount`='$amount',`price`='$price' WHERE 1";

    $result = mysqli_query($conn, $sql);

    //wykonuje zapytanie na bazie danych na podstawie podanego SQLa oraz połączenia z BD
    if($result){
        echo "Zaktualizowano rekord o id: ".$id;
    } else {
        //mysqli_error - wyciąga błąd z połączenia
        echo "Bluescreen Panie Heniu: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>