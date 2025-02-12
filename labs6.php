<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №6</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<h1>Примеры решения задач</h1>
    <div>
        <h2>Задача №1</h2>
        <form action="" method="GET">
            <p>Введите ваш город</p>
            <input type="text" name="city">
            <input type="submit">
        </form>
        <?php 
            if(!empty($_REQUEST['city'])){
                $city = $_REQUEST['city'];
                echo 'Ваш город: '.$city;
            }
        ?>
    </div>
    <div>
        <h2>Задача №2. Запрет ввода тегов</h2>
        <form action="" method="GET">
            <p>Введите ваш город, используя HTML теги</p>
            <input type="text" name="city">
            <input type="submit">
        </form>
        <?php 
            if(!empty($_REQUEST['city'])){
                $city = strip_tags($_REQUEST['city']);
                echo "Ваш город: ".$city;
            }
        ?>
    </div>
    <div>
        <h2>Задача №3. Скрываем форму после отправки</h2>
        <?php 
            //Если город пустой - покажем форму
            if(!isset($_REQUEST['city3'])){
        ?>
        <form action="" method="GET">
            <input type="text" name="city3">
            <input type="submit">
        </form>

        <?php 
            }
        ?>

        <?php
            //Если форма была отправлена и город не пустой
            if(isset($_REQUEST['city3'])){
                $city3 = strip_tags($_REQUEST['city3']);
                echo 'Ваш город: '.$city3;
            }
        ?>
    </div>
    <h1>Задачи для решения</h1>
    <div>
        <h2>Задача №1</h2>
        <form action="" method="GET">
            Введите имя: 
            <input type="text" name="nameuser">
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET['nameuser'])){
                $username = strip_tags($_GET['nameuser']);
                echo "Привет, $username";
            }
        ?>
    </div>
    <div>
        <h2>Задача №2</h2>
        <form action="" method="GET">
            Введите имя: 
            <br>
            <input type="text" name="userName" required><br>
            Введите возраст: 
            <br>
            <input type="text" name="userAge" required><br>
            Отправте сообщение
            <br>
            <textarea name="message" required></textarea><br>
            <br>
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET['userName']) and isset($_GET['userAge']) and isset($_GET['message'])){
                $userName = strip_tags($_GET['userName']);
                $userAge = strip_tags($_GET['userAge']);
                $userMessage = strip_tags($_GET['message']);
                if(empty($userName) || empty($userAge) || empty($userMessage)){
                    echo "Пожалуйста, заполните все поля";
                }
                elseif(!is_numeric($userAge)){
                    echo "Взраст должен быть числом";
                }
                else{
                    echo "Привет, $userName, $userAge лет.<br/>";
                    echo "Твое сообщение: $userMessage";
                }
            }
        ?>
    </div>
    <div>
        <h2>Задача №3</h2>
        <?php 
        
            if(!isset($_GET['userAge1'])){ 
                
        ?>
            <form action="" method="GET">
                это форма №1
                Сколько вам лет?
                <input type="text" name="userAge1"><br/>
                <input type="submit" name="button">
            </form>
        <?php
            }
        ?>

        <?php 
            if(isset($_GET['userAge1'])){
                $userAge1 = $_GET['userAge1'];
                if(!is_numeric($userAge1)){
                    echo 'Поле должно быть заполнено и содеражать число';
                    echo '<form action="" method="GET">
                    Сколько вам лет?
                    <input type="text" name="userAge1" value="' . htmlspecialchars($userAge1) . '"><br/>
                    <input type="submit" name="button">
                  </form>';
                }
                else{
                    echo "Ваш возраст: $userAge1";
                    
        ?>
            <form action="" method="GET">
                Форма №2
                Измените возраст
                <input type="text" name="userAge1"><br/>
                <input type="submit" name="button">
            </form>
        <?php 
                }
            }
        ?>
    </div>
    <div>
        <h2>Задача №4</h2>
        <?php 
            if(isset($_POST['log']) and isset($_POST['pass'])){
                $flagAccess = null;
                $userLog = rtrim($_POST['log']);
                $userPass = rtrim($_POST['pass']);
                $logAndPass = [];
                $credentialsFile = 'credentials.txt';
                $credentials = file($credentialsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach($credentials as $credential){
                    list($fileLog, $Filepass) = explode(':', $credential);
                    if($userLog === $fileLog and $userPass === $userPass){
                        $flagAccess = true;
                        break;
                    }
                }
                if($flagAccess){
                    echo "Доступ разрешен!";
        ?>

        <?php 
                }else{
                    echo "Доступ запрещен";
                }
            }
        ?>
        <form action="" method="POST">
            Введите логин:<br/> 
            <input type="text" name="log"><br/><br/>
            Введите пароль:<br/>  
            <input type="password" name="pass"><br/><br/>
            <input type="submit" value="Вход">
        </form>
    </div>
    <h1>Атрибуты value и placeholder</h1>
    <h2>Задача №1</h2>
    <div>
        <?php 
            $name = '';
            if(isset($_GET['name'])){
                $name = $_GET['name'];
            }
        ?>
        <form action="" method="GET">
            Введите свое имя<br/>
            <input type="text" name="name" value="<?=$name?>" placeholder="username">
            <input type="submit">
        </form>
    </div>
    <h2>Задача №2</h2>
    <div>
        <?php 
            $name1 = '';
            $text = '';
            if(isset($_GET['name1']) and isset($_GET["text"])){
                $name1 = $_GET['name1'];
                $text = $_GET['text'];
            }
        ?>
        <form action="" method="GET">
            <input type="text" name="name1" value="<?=$name1?>" placeholder="АбдулАльхазред"><br/>
            <textarea name="text" placeholder="<?=$text?>"></textarea><br/>
            <input type="submit">
        </form>
    </div>
</body>
</html>