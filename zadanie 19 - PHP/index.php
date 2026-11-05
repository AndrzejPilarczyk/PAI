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
</body>

</body>
</html>

<?php

?>