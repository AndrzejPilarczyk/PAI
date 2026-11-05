<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

$conn = mysqli_connect($host,$username,$password,$database);

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

    $sql = "INSERT INTO `products`(`name`, `amount`, `price`) VALUES ('$name','$amount','$price')";
    //wykonuje zapytanie na bazie danych na podstawie podanego SQLa oraz połączenia z BD
    if(mysqli_query($conn,$sql)){
        echo "Udało się dodać rekord!";
    } else {
        //mysqli_error - wyciąga błąd z połączenia
        echo "Bluescreen Panie Heniu: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>