<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="dodaj.php" class="<?= $currentPage == 'dodaj.php' ? 'active' : ''?>">Dodaj</a>
    <a href="lista.php" class="<?= $currentPage == 'lista.php' ? 'active' : ''?>">lista</a>
    <a href="edytuj.php" class="<?= $currentPage == 'edytuj.php' ? 'active' : ''?>">edytuj</a>
    <a href="usun.php" class="<?= $currentPage == 'usun.php' ? 'active' : ''?>">usun</a>
</nav>
</body>
</html>

