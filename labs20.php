<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №20</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Работа с регулярными выражениями. Часть 4</h1>
    <div>
        <h2>Позитивный и негативных просмотр</h2>
        <?php 
            // (?<=симвоол) - в данном случае мы указываем символ,  
            // который не заменяем
            echo preg_replace('#(?<=x)a{3}#','!','xaaa baaa');
            //(?<=симвоол) - скобки называются позитивный просмотр назад
            // Позтивный - так как "х" (в нашем случае) должен быть
            // ТОЛЬКО ТОГДА ПРОИЗОЙДЕТ ЗАМЕНА
            // есть и НЕГАТИВНЫЙ ПРОСМОТР НАЗАД (?<!символ)
            // он наоборот, говорит, чего-то должно не быть
            echo "<br/>";
            echo preg_replace('#(?<!x)a{3}#','!','xaaa baaa');
            echo "<br/>";
            
            // позитивный просмотр вперед (?=) 
            // негативаный просмотр вперед (?!)

            //Если после ааа стоит х тогда заменим на !
            echo preg_replace('#a{3}(?=x)#','!','aaax aaab');
            echo "<br/>";

            //Если после "ааа" стоит не "х", тогда заменим на "!"
            echo preg_replace('#a{3}(?!x)#','!','aaax aaab');
            
        ?>
    </div>
    <h2>Функция preg_replace_callback</h2>
    <div>
        <?php 
            // preg_replace_callback(регулярка, "название функции", где менять); Имя функции в " "
            echo preg_replace_callback('#(\d+)\+(\d+)=#', 'sum', '2+3=');
            function sum($matches){
                return  $matches[0]."".$matches[1] + $matches[2];
            }
        ?>
    </div>
    <h1>Задачи для решения</h1>
    <div>
        <h2>Задача №1</h2>
        <?php 
            echo preg_replace('#(?<=b)a{3}#', '!','baaa');
        ?>
    </div>
    <div>
        <h2>Задача №2</h2>
        <?php 
            echo preg_replace('#(?<!b)a{3}#', '!','waaa baaa');
        ?>
    </div>
    <div>
        <h2>Задача №3</h2>
        <?php 
            echo preg_replace('#a{3}(?<!b)#', '!','aaab');
        ?>
    </div>
    <div>
        <h2>Задача №4</h2>
        <?php 
            echo preg_replace('#a{3}(?!b)#', '!','aaaw aaab');
        ?>
    </div>
    <div>
        <h2>Задача №5</h2>
        <?php 
            echo preg_replace('#(?<!\*)\*(?!\*)#', '!',"aaa * bbb ** eee * **");
        ?>
    </div>
    <div>
        <h2>Задача №6</h2>
        <?php 
            echo preg_replace('#(?<!\*)\*\*(?!\*)#', '!',"aaa * bbb ** eee *** k ****");
        ?>
    </div>
    <div>
        <h2>Задача №7</h2>
        <?php 
            echo preg_replace('#(?<![a-z])[a-z]#', '!',"aa dd");
        ?>
    </div>
    <div>
        <h2>Задача №8</h2>
        <?php 
            echo preg_replace('#(?<=[a-z])[a-z]#', '!',"aa dd");
        ?>
    </div>
    <h2>На preg_replace_callback</h2>
    <div>
        <h2>Задача №9</h2>
        <?php 
            echo preg_replace_callback('#(\d+)#', 'squre', '3 5 8 9');
            function squre($matches){
                return $matches[0] * $matches[0];
            }
        ?>
    </div>
    <div>
        <h2>Задача №10</h2>
        <?php 
            echo preg_replace_callback("#\'(\d+)\'#", 'x2', "2aaa'3'bbb'4'");
            function x2($matches){
                return "'".($matches[1] * 2)."'";
            }
        ?>
    </div>
</body>
</html>