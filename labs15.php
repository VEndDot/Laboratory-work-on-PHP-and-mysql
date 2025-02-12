<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №15</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Продвинутая работа с пользовательскими функциями</h1>
    <p>global имя_перем - для глобальных переменных</p>
    <p>static имя_перем - для статичных переменных</p>
    <div>
        <h2>Значения по умолчанию</h2>
        <?php 
            function square($var =5){
                $result = $var*$var;
                return $result;
            }

            echo square();
            echo square(3);
        ?>
    </div>
    <div>
        <h2>Рекурсия</h2>

        <?php 
            $arr = [1,2,3,4,5];
            last($arr);
            function last($arr){
                echo array_pop($arr)."<br/>";
                if(!empty($arr)){
                    last($arr);
                }
            }
        ?>
    </div>
    <h2>Задачи для решения</h2>
    <div>
        <h2>Значения по умолчанию</h2>
        <h3>Задача №1</h3>

        <?php 
            function cut($str, $numberChar = 10){
                echo  substr($str, 0, $numberChar);
            }
            cut('Hello, my name is shadow');
        ?>
    </div>
    <div>
        <h2>Работа с рекурсией</h2>
        <h3>Задача №2</h3>
        <?php 
            $arr = [1,2,3,4,5,6,7,8,9,0];

            function one($arr){
                echo array_pop($arr);
                if(!empty($arr)){
                    one($arr);
                }
            }

            one($arr);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 
            $number = "24865454896465";
            
            function two($number){
                
                if($number < 10){
                    return $number;
                }
                else{
                    $number = array_sum(str_split($number) );
                    return two($number);
                }
                
            }

            echo two($number);
        ?>
    </div>
</body>
</html>