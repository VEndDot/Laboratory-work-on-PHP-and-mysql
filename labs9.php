<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №9</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Приемы работы с флагами</h1>
    <div>
        <?php
            $nFlag = false;
            $arr = ['a','b','c','d','e','c'];
            foreach ($arr as $elem){
                if($elem == 'c'){
                    echo 'Есть';
                    $nFlag = true;
                    break;
                }
            }
            if (!$nFlag){
                echo 'no';
            }
        ?>
    </div>
    <h1>Флаги в функции</h1>
    <div>
        <?php
            function hesElem($arr){

                foreach($arr as $elem){
                    if($elem == 'c'){
                        return true; 
                    }
                }
                return false;
            }

            $arr = ['a','b','c','d','e','c'];
            echo hesElem($arr) ? "true" : "false" ; 
        ?>
    </div>
    <div>
        <h2>Задачи для решения</h2>
        <h3>Задача №1</h3>
        <?php 
            $nFlag = false;
            $listN = [1,2,3,4,6,7,8,9,0,5];
            foreach($listN as $n){
                if($n === 5){
                    $nFlag = true;
                }
            } 
            echo $nFlag ? "Да" : "Нет";
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php 
            $flagN = true;
            $n = 31;
            for($i = 2; $i<=30; $i++){
                if($n%$i == 0){
                    $flagN = false;
                }
            }
            echo $flagN ? "Нет": "Да";
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php
            $flagN = false;
            $tmp = null; 
            $listN = [1,2,3,3,4,6,7,8,9,0,5,2];
            foreach($listN as $n){
                if($n == $tmp){
                    $flagN = true;
                }
                $tmp = $n;
            }
            echo $flagN ? "ДА": "НЕТ" ;
        ?>
    </div>
</body>
</html>