<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №8</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Работа с пользовательскими функциями в PHP</h1>
    <h2>Задачи для решения</h2>
    <div>
        <h3>Задача №1</h3>
        <?php 
            function quadroN($n){
                return $n*$n;
            }
            echo quadroN(3);
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php
            function sunN($a, $b){
                return $a+$b;
            } 
            echo sunN(2,3);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php
            function expressionN($a, $b,$c){
                return ($a-$b)/$c;
            } 
            echo expressionN(5,2,3);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 
            function dayOfWeek($day){
                $listDay = ['вс','пн','вт','ср','чт','пт','сб']; 
                return $listDay[$day - 1];
            }
            echo dayOfWeek(rand(1,7));
        ?>
    </div>
</body>
</html>