<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №21</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Работа с сессиями PHP</h1>
    <p>Что такое сессия - это механизм, который позволяет хранить данные для конкретного пользователя
        между запусками скрипта
    </p>
    <h2>Инициализация сессии</h2>
    <?php 
        // чтобы записать что-то в сессию ее сначала нужно инициализировать с помощью функции session_start():
        //session_start();
        //Пишем в сессии
        //$_SESSION['test'] = 'TEST!';
        //После того, как мы что-то записали в сессию, мы можем это извлеч
        //echo $_SESSION['test'];
    ?>
    <h2>Сделаем счетчик на сессиях</h2>
    <?php 
        /*
            Переменная $_SESSION['counter'] будет нашим счетчиком
            Если скрипт запускается первый раз -
            она будет пуста, присвоим ей единицу.
            Если не первый раз, тогда прибавим 1
        */
        // if(!isset($_SESSION['counter'])){
        //     $_SESSION['counter'] = 1;
        // }
        // else{
        //     $_SESSION['counter'] += 1;
        // }

        // echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
    ?>
    <h2>Удаление переменных из сессии</h2>
    <?php 
        //unset($_SESSION['counter']);
    ?>
    <h2>Завершение сессии</h2>
    <?php 
        // После этой команды все переменные станут null
        //session_destroy();
    ?>
    <h2>Задачи по работе с сессиями</h2>
    <div>
        <h3>Задача №1</h3>
        <?php
            session_start();
            $_SESSION['t'] = 'test';
            echo $_SESSION['t'];
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <form action="" method="GET">
            Введите ваше имя: 
            <input type="text" name="pageTwo"><br/>
            <input type="submit">
        </form>
        <?php
            if(isset($_GET['pageTwo'])){
                $_SESSION['pageTwoInfo'] = $_GET['pageTwo']; 
                header("Location: labs21Task2.php");
            }
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php
            
            if(!isset($_SESSION['counter'])){
                $_SESSION['counter'] = 0;
                echo 'Вы первый раз зашли на эту страницу';
                
            }
            else{
                $_SESSION['counter'] += 1;
                echo 'Вы зашли на эту страницу '.$_SESSION['counter'].' раз';
            }
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <form action="" method="GET">
            Введите вашу страну:
            <input type="text" name="country"><br/>
            <input type="submit">
        </form>
        <?php
            if(isset($_GET['country'])){
                $_SESSION['сoubtryInfo'] = $_GET['country']; 
                header('Location: labs21Task2.php');
            }
        ?>
    </div>
    <div>
        <h3>Задача №5</h3>
        <?php
            if(!isset($_SESSION['userLoginTime'])){
                $_SESSION['userLoginTime'] = time();
            }
            echo 'Вы вошли '.time() - $_SESSION['userLoginTime']." секунд назад";
        ?>
    </div>
    <div>
        <h3>Задача №6</h3>
        <form action="" method="POST">
            <input type="email" name="userEmail">
            <input type="submit">
        </form>
        <?php
            if(isset($_POST['userEmail'])){
                $_SESSION['mailValue'] = $_POST['userEmail'];
            }
        ?>
        <form action="" method="POST">
            Введите имя:
            <input type="text"><br/>
            Введите фамилию:
            <input type="text"><br/>
            Введите пароль: 
            <input type="password"><br/>
            Введите маил: 
            <input type="email" value="<?=$_SESSION['mailValue']?>"><br/>
            <input type="submit"><br/>
        </form>
    </div>
</body>
</html>