<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №24</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
    </style>
</head>
<body>
    <h1>Команды Select, insert, delete, update</h1>
    <div>
        <?php 
            // Устанавливаем доступы к базе данных: 
            $host = 'localhost'; //имя хоста, на локальном компьютере
            $user = 'root'; //имя пользователя, по умолчанию это root
            $password = ''; //пароль, по умолчанию пустой
            $db_name = 'test';//имя базы данных
            
            // соединение с базой данных
            $connect = mysqli_connect($host, $user, $password, $db_name);
            if(!$connect){
                die('Ошибка подключения к базе данных: '.mysqli_connect_error());
            }

            // Устанавливаем кодировку
            mysqli_query($connect, "SET NAMES 'utf8'");

            // Выбрать все_столбцы Из workers ГДЕ ай-ди_больше_нуля
            $query = "INSERT INTO workers SET name='Гена', age=30, salary=1000"; // написали запрос

            // делаем запрос к БД, результат запроса пишем в $result
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

            // преобразуем то, что отдала нам база в нормальный массив PHP
            for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

            // выведем массив результатов
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        ?>
    </div>
</body>
</html>