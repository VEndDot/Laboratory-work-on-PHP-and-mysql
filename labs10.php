<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №10</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Приемы работы с логическими значениями</h1>
    <h2>Задачи для решения</h2>
    <div>
        <h3>Задача №1</h3>
        <?php 
            function func($a,$b){
                return $a === $b;
            }
            echo func(2,3)? "true" : "flase";
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php 
            function func2($a1,$b2){
                return $a1 + $b2 > 10;
            }
            echo func2(7,3)? "true" : "false";
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 
            function func3($a1){
                return $a1 < 0;
            }
            echo func3(-1)? "true" : "false";
        ?>
    </div>
</body>
</html>