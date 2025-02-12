<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №22</title>
    <?php date_default_timezone_set('Asia/Yekaterinburg');?> 

    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Работа с куки</h1>
    <p>Cookie - это способ долговременного хранения данных в браузере пользователя</p>
    <p>В куки можно хранить только 4кб</p>
    <h2>Пишем в cookie</h2>
    <?php 
        // такая кука живет до закрытия браузера
        setcookie('test', 'TEST!');
        // продлить время жизни куки можно так
        // продлит куку на час
        setcookie('test', 'TEST!', time()+3600);
        // продлит куку на день
        setcookie('test', 'TEST!', time()+3600*24);
        // продлит куку на месяц
        setcookie('test', 'TEST!', time()+3600*24*30);
        // продлит куку на год
        setcookie('test', 'TEST!', time()+3600*24*30*365);
    ?>
    <h2>Читаем из куки</h2>
    <?php 
        //куку можно прочитать из глобального массива
        echo $_COOKIE['test']; 
    ?>
    <h2>Удаляем куки</h2>
    <?php 
        // куки удаляются очень хитрым способом - устанавливая дату смерти
        // на текущий момент времени
        setcookie('test', '', time());
    ?>
    <h2>Работа с куки</h2>
    <h3>Задача №1-2</h3>
    <?php 
        setcookie('test', '123');
        echo $_COOKIE['test'];
        setcookie('test', '', time());
    ?>
    <h3>Задача №3</h3>
    <?php 
        if(!isset($_COOKIE['count'])){
            setcookie('count', 0);
        }
        else{
            setcookie('count', $_COOKIE['count'] += 1);
            echo $_COOKIE['count'];
        }
        
    ?>
    <h3>Задача №4</h3>
    <form action="" method="GET">
        Введите свою дату рождения:
        <input type="data" name="month" placeholder="month">
        <input type="data" name="day" placeholder="day">
        <input type="submit">
    </form>
    <?php  
        if (isset($_GET['month']) && isset($_GET['day'])) {
            $m = $_GET['month'];
            $d = $_GET['day'];
            $today = strtotime('today'); 
            $birthday = strtotime(date("Y") . "-$m-$d");

            // Если день рождения уже прошел в этом году, перенесите его на следующий год
            if ($today > $birthday) {
                $birthday = strtotime('+1 year', $birthday);
            }

            // Рассчитываем количество дней до дня рождения
            $daysBeforeTheBirthday = ceil(($birthday - $today) / (60 * 60 * 24));
            } else {
                // Если параметры month и day не заданы, можно задать значение по умолчанию
                $daysBeforeTheBirthday = null; // или любое другое значение по умолчанию
            }

        if (!isset($_COOKIE['answer'])) {
            // Устанавливаем куки на 1 час (3600 секунд)
            setcookie('answer', $daysBeforeTheBirthday, time() + 3600);
        } else {
            // Выводим количество дней до дня рождения, если куки уже установлены
            echo $_COOKIE['answer'];
        }
    ?>
</body>
</html>