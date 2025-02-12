<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Правктика</title>
</head>
<body>
    <?php 
        // Устанавливаем доступы к базе данных:
        $host = 'localhost'; //имя хоста, на локальном компьютере
        $user = 'root'; // имя пользователя, по умолчанию это root
        $password = ''; // пароль, по умолчанию пустой
        $db_name = 'test'; // имя базы данных

        // соединяемя с базой данных, используя наши доступы
        $link = mysqli_connect($host, $user, $password, $db_name);

        // Устанавливаем кодровку
        mysqli_query($link,"SET NAMES 'utf8'");

        // Формируем тестовый запрос
        $query = "SELECT * FROM workers WHERE id < 0";

        // Делаем запрос к БД, результат запроса пишем в $result
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        // Проверяем, что же нам отада база данных, если null - то какие-то проблемы
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        var_dump($data);
    ?>
</body>
</html>