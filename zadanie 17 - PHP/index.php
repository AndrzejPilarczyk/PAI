<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

$conn = new mysqli($host,$username,$password,$database);

if(!$conn){
    die("Połączenie nie powiodło się: ");
}

echo "Połączenie się powiodło.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    $conn;

    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";
    

    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    //Tabela Products
    //pola: id, name, price, amount
    $sql = "INSERT INTO Products (name, amount, price) VALUES (?, ?, ?)";
    $stmt = $conn -> prepare($sql); // przygotowuje na połączeniu zapytanie SQL
    $stmt -> bind_param("sid",$name, $amount, $price);
    
    $stmt -> execute();
    $stmt -> close();
    $conn -> close();
    }
?>