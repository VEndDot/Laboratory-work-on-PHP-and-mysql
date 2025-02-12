<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №11</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Приемы работы с циклами на PHP</h1>
    <h2>Задачи для решения</h2>
    <div>
        <h3>Задача №1</h3>
        <?php
            $str = '';
            for($i=1; $i<=9; $i++){
                $str .= $i;
            }
            echo $str;
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php
            $str = '';
            for($i=9; $i>=1; $i--){
                $str .= $i;
            }
            echo $str;
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php
            $str = '';
            for($i=1; $i<=9; $i++){
                $str .= "-".$i;
            }
            echo $str.'-';
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <?php
            for($i=1; $i<=20; $i++){
                for($j=1; $j<=$i; $j++){
                    echo "x";
                }
                echo "<br/>";
            }
        ?>
    </div>
    <div>
        <h3>Задача №5</h3>
        <?php 
            for($i=1; $i<=9; $i++){
                for($j=1; $j<=$i; $j++){
                    echo $i;
                }
                echo "<br/>";
            }
        ?>
    </div>
    <div>
        <h3>Задача №6</h3>
        <?php 
            for($i=1; $i<=5; $i++){
                for($j=1; $j<=$i*2; $j++){
                    echo 'x';
                }
                echo '<br/>';
            }
        ?>
    </div>
</body>
</html>