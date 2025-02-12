<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страница лабораторной работы №21</title>
</head>
<body>
    <h2>Задача №2</h2>
    <?php 
        session_start();
        echo "Добро пожаловать: ".$_SESSION['pageTwoInfo'].'!';
    ?>
    <h2>Задача №4</h2>
    <?php 
        echo "Ваша страна: ".$_SESSION['сoubtryInfo'];
    ?>
</body>
</html>