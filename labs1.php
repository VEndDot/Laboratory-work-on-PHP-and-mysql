<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №1</title>
</head>

<body>
    <h1 style="text-align: center">Лабораторная работа №1</h1>
    <div>
        <h2 style="text-align: center">1. Информация по лабе</h2>
        <?php
            echo "1. Hello World! <br/>"; //В двойных кавычках переменные внутри нее обрабатываются
            echo '2. Hello World! <br/>'; // одинарные кавычки с разрывом строки
            echo '3. Привет мир! <br/>'; 
            echo "4. Выводит информацию о дате в соответствии с аргументами ";
            echo date("d.m.y");
        ?>

        <h3 style="text-align: center">1.1 Типы данных</h3>
        <?php
            $myNumber = 5; // численные переменные
            $float = -3.25; // с плавающей точкой
            $string = "Hello World!"; // строковая переменная
            $bool = true; // булева переменная

            echo "Численные переменные = $myNumber<br/>";
            echo 'Если попытаться вывести в одинарных кавычках = $myNumber<br/>';
            echo "Переменная с плавающей точкой = $float<br/>";
            echo "Строкавая переменная = $string<br/>";
            echo "Булевая переменная = $bool ";
            echo "false не будет показываться на странице<br>";
            $myNumber = 10;
            echo 'Изменим переменную $myNumber = ';
            echo "$myNumber <br/>";
        ?>
        <h3 style="text-align: center">1.2 Функция var_dump()</h3>
        <div style="text-align: center" >Выводит информацию о переменной</div>
        <div>
            <?php
                echo var_dump($myNumber)."<br/>";
                echo var_dump($float)."<br/>";
                echo var_dump($string)."<br/>";
                echo var_dump($bool);
            ?>
        </div>
        <h3 style="text-align: center">1.3 Константы</h3>
        <h3 style="text-align: center">1.3.1 Правильные имена констант. Функция define и defined</h3>
        <div>
            
            <li>
                Функция Define() позволяет создать константу с 
                заданным именем и значением <br/>
                define("имя_константы", "значение_константы")
            </li>


            <?php
                define("FOO", "что-то, ");
                define("FOO2", "что-то еще ");
                define("FOO_BAR", "и чир-то большее");
            ?>
            <li>
                Функция Defined() получить информацию о том
                есть ли константа с указанным именем<br/>
                defined("имя_константы")<br/>
            </li>
            <?php
                echo "Существует ли константа с именем FOO2 = ".defined("FOO2")." единица означает, что константа существует<br/>";
            ?>
            <p>
                если написать echo имя_константы; то получим значение константы
            </p>
            <?php
                echo "Значение константы с имен FOO = ".FOO;
            ?>
        </div>
    </div>
    <div title = "Арифметические операции">
        <h3 style="text-align: center">1.4 Арифметические операции в PHP</h3>
        <?php
            $x = 2;
            $y = 10;
            echo "x = $x <br/> y = $y<br/> x +-*/ y <br/>";
            $summ = $x + $y;
            $diff = $x - $y;
            $mul = $x * $y;
            $div = $x / $y;

            echo "Пример сложения = $summ<br/>";
            echo "Пример вычитания = $diff<br/>";
            echo "Пример умножения = $mul<br/>";
            echo "Пример деления = $div<br/>";
        ?>
    </div>



    <div>
        <h2 style="text-align: center">2. Примеры решения задач</h2>
        <h3 style = "text-align: center">Задача №1. Округлениие и ассоциативныый массив</h3>
        <?php
            
            $sqrt1000 = sqrt(1000);
            
            echo "Корень из числа 1000 = ".$sqrt1000."<br/>";
            $arr = [$sqrt1000, floor($sqrt1000), ceil($sqrt1000)];
            echo print_r($arr);
        ?>

        <h3 style = "text-align: center">Задача №2. Массив случайных чисел</h3>
        <?php
            $arr = [];
            for($i = 0; $i < 30; $i++){
                $arr[$i] = mt_rand(1, 10);
            }
            
            echo print_r($arr);
        ?>
    </div>    


    <div>
        <h2 style="text-align: center">3. Решение задач</h2>
        <div>
            <h3 style = "text-align: center">Задача №1. Работа с %</h3>
            <?php
                $a = 10;
                $b = 3;
                echo "1) $a % $b = ".$a % $b."<br/>2) ";
                
                if ($a % $b == 0){
                    echo "Делится";
                }
                else{
                    echo "Делится с остатком";
                }
            ?>
        </div>
        <div>
            <h3 style = "text-align: center">Задача №2. Работа со степенью и корнем</h3>
            <?php
                $st = pow(2, 10);
                echo "<br/>1) "."2^10 = $st";
                $sqrt245 = sqrt(245);
                echo "<br/>2) "."корень из 245 = $sqrt245 <br/>3) ";
                $arr = [4,2,5,19,13,0,10];
                $summ = 0;
                foreach($arr as $elem){
                    $summ += pow($elem, 2);
                }
                echo round(sqrt($summ), 2);
            ?>
        </div>
        <div>
        <div title="Работа с функциями округления">
            <h3 style = "text-align: center">Задача №3. Работа с функциями округления</h3>
            <?php
                echo "1) Квадратный корень из 379 <br/>".round(sqrt(379), 0)."<br/>".round(sqrt(379), 1)."<br/>".round(sqrt(379), 2) ;
                echo "<br/>2) Квадратный корень из 587<br/>".floor(sqrt(587))." в меньшую<br/>".ceil(sqrt(587))." в большую";
            ?>
        </div>
        <div title = "Работа с min и max">
            <h3 style = "text-align: center">Задача №4. Работа с min и max</h3>
            <?php
                echo "4, -2, 5, 19, -130, 0, 10<br/>1) min = ".min(4,-2,5,19,-130,0,10)."<br/>2) max = ".max(4,-2,5,19,-130,0,10);
            ?>
        </div>
        <div title = "Работа с рандомом">
            <h3 style = "text-align: center">Задача №5. Работа с рандомом</h3>
            <?php
                echo "<br/>1) ".mt_rand(1,100)."<br/>";
                $arr = [];
                for($i = 0; $i < 10; $i++){
                    $arr[$i] = mt_rand(1, 10000);
                }
                echo "<br/>2) ";
                echo print_r($arr);
            ?>        
        </div>
        <div title = "Работа с модулем">
            <h3 style = "text-align: center">Задача №6. Работа с модулем</h3>
            <?php
                $ab = abs($a - $b);
                echo "1) a = 3 - b = 10 = -7 abs(-7) = ".$ab."<br/>2) ";
                $arr = [1,2,-1,-2,3,-3];
                $count = 0;
                echo print_r($arr)."<br/>2) ";
                foreach($arr as $elem){
                    $arr[$count] = abs($elem);
                    $count += 1;
                }

                echo print_r($arr);
            ?>
        </div>
        <div>
            <h3 style = "text-align: center">Задача №7. ЗАДАЧИ</h3>
            <?php
                $n = 30;
                $arrN = [];
                for ($i = 1; $i <= $n; $i++){
                    if ($n%$i == 0){
                        $arrN[$i] = $i;
                    }
                }
                echo "1) ";
                echo print_r($arrN);
                $arrN = [1,2,3,4,5,6,7,8,9,10];
                $summ = 0;
                $count = 0;
                foreach($arrN as $elem){
                    if ($summ <= 10){
                        $summ += $elem;
                        $count+=1;
                    }
                }
                echo "<br/>2) ".$count;
            ?>
        </div>
    </div>   
    <footer >
        <div style = "text-align: right">
            <a href="index.php">Вернуться на главную</a>
        </div>
    </footer>
</body>

</html>


