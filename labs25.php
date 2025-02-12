<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №25</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
    </style>
</head>
<body>
    <h1>ORDER BY</h1>
    <div>
    <?php 
        //КОД ЗАПРОСА К БД И ПОЛУЧЕНИЯ РЕЗУЛЬТАТА
            // Устанавливаем доступы к базе данных: 
            $host = 'localhost'; //имя хоста, на локальном компьютере
            $user = 'root'; //имя пользователя, по умолчанию это root
            $password = ''; //пароль, по умолчанию пустой
            $db_name = 'test';//имя базы данных
            function connect($host,$user,$password,$db_name){
                // соединение с базой данных
                return mysqli_connect($host, $user, $password, $db_name);
            }
            function encoding($connect){
                // Устанавливаем кодировку
                mysqli_query($connect, "SET NAMES 'utf8'");
            }
            
            function queryBD($connect, $query){
                // делаем запрос к БД, результат запроса пишем в $result
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                return $result;
            }

            function getArrayBD($result){
                // преобразуем то, что отдала нам база в нормальный массив PHP
                for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                // выведем массив результатов
                return $data;
            }

            function formatedArrayDB($arrayDB){
                echo "<pre>";
                print_r($arrayDB);
                echo "</pre>";
            }
            $connect = connect($host,$user,$password,$db_name);
            encoding($connect);
        ?>
    </div>
    <div>
        <h1>От меньшего к большему</h1>
        <?php
            // Выберем из нашей таблицы всех работников и отсортируем их по возрасту 
            // От меньшего к большему
            $query = "SELECT * FROM workers WHERE id > 0 ORDER BY age";
            $result = queryBD($connect, $query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h1>От большего к меньшему</h1>
        <?php
            // Выберем из нашей таблицы всех работников и отсортируем их по возрасту 
            // От большего к меньшему
            $query = "SELECT * FROM workers WHERE id > 0 ORDER BY age DESC";
            $result = queryBD($connect, $query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <h1>LIMIT</h1>
    <div>
        <?php 
            // ограничение количества
            // с помощью команды мы можем ограничить количество строк в результате
            $query = "SELECT * FROM workers WHERE id>0 LIMIT 2";
            $result = queryBD($connect, $query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <?php 
            // ограничение количества
            // с помощью команды мы можем ограничить количество строк в результате
            // а также сделать, чтобы вывелись строки со 2 по 5
            $query = "SELECT * FROM workers WHERE id>0 LIMIT 2,5";
            $result = queryBD($connect, $query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <?php 
            // ограничение количества
            // с помощью команды мы можем ограничить количество строк в результате
            // а также сделать, чтобы вывелись строки со 2 по 5
            // LIMIT and ORDER BY вместе
            /*
                В данном случае будет следующее: Выбрать все столбцы из таблицы где айди больше 
                нуля ПОРЯДОК СЛЕДОВАНИЯ айди С большего вывести со 2 по 5
            */
            $query = "SELECT * FROM workers WHERE id>0 ORDER BY id DESC LIMIT 2,5";
            $result = queryBD($connect, $query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <h1>COUNT</h1>
    <div>
        <?php 
            // Позволяет подсчитать количество строк в выборке
            $query = "SELECT COUNT(*) as count FROM workers WHERE id>0";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <h1>КОМАНДА LIKE - реализуем поиск</h1>
    <div>
        <?php 
            // ВЫБРАТЬ все ИЗ таблицы ГДЕ имя ПОДОБНО любой_строке_заканчивающейся_на_я
            $query = "SELECT * FROM workers WHERE name LIKE '%я'";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <h1>ЗАДАЧИ НА БАЗЫ ДАННЫХ</h1>
    <h2>НА LIMIT</h2>
    <div>
        <h3>task 1</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id>0 LIMIT 6";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 2</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id>0 LIMIT 2,3";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 3</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id>0 ORDER BY salary";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 4</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id>0 ORDER BY salary DESC";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 5</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id>0 ORDER BY age LIMIT 2,4";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <h1>На COUNT</h1>
    <div>
        <h3>task 6</h3>
        <?php 
            $query = "SELECT COUNT(*) as count FROM workers WHERE id>0";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 7</h3>
        <?php 
            $query = "SELECT COUNT(*) as count FROM workers WHERE salary=300";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <h1>На LIKE</h1>
    <div>
        <h3>task 8</h3>
        <?php 
            $query = "SELECT * FROM pages WHERE author LIKE '%ов'";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 9</h3>
        <?php 
            $query = "SELECT * FROM pages WHERE article LIKE '%элемент'";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 10</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE age LIKE '%3_'";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
    <div>
        <h3>task 11</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE name LIKE '%я'";
            $result = queryBD($connect, $query);
            $count = getArrayBD($result);
            formatedArrayDB($count);
        ?>
    </div>
</body>
</html>