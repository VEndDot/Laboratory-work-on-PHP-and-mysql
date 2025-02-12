<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №13</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Правильное использование пользовательских функций</h1>
    <h2>Мой вариант решения</h2>
    <?php 
    // Дан массив. Нужно записать в новый массив только те элементы, сумма цифр которых от 1 до 9
        function getListDigits($number){
            // получает число
            // возвращает лист из цифр
            return str_split(abs($number));
        }

        function sumDigits($listDigits){
            // получает лист цифр
            // Возвращает их сумму
            $sum = 0;
            foreach($listDigits as $digit){
                $sum += $digit;
            }
            return $sum;
        }

        function from1To9($sNumber){
            // получает число - сумму
            // возвращает 1-если число больше 1 и меньше 9
            return  $sNumber >= 1 and $sNumber <= 9;
        }

        $arrNumbers = [123,77,15,37,28,11,2,7,8,9,19,0,-51];
        $arrFrom1To9 = [];

        foreach($arrNumbers as $number){
            if(from1To9(sumDigits(getListDigits($number)))){
                $arrFrom1To9[] = $number;
            }
        }
        
        print_r($arrFrom1To9);
    ?>
    <h2>Задача 2</h2>
    <?php
        // дан массив с числами, найдем сумму всех цифр из этих чисел
        $arrNumbers2 = [12,19,28,13,14,345];
        $sumDigitsList = 0;
        foreach($arrNumbers2 as $elem){
            $sumDigitsList += sumDigits(getListDigits($elem));
        }
        echo $sumDigitsList;
    ?>
</body>
</html>