<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        h1{
            text-align: center;
        }
        div{
            text-align: center;
        }
        span{
            color: red;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <h1>Страница входа в лабораторные работы</h1>
<div >
        <?php 
            if(isset($_GET['log']) and isset($_GET['pass'])){
                $flagAccess = null;
                $userLog = rtrim($_GET['log']);
                $userPass = rtrim($_GET['pass']);
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
                    header("Location: listLabs.php");
        ?>

        <?php 
                }else{
                    echo "<span>Доступ запрещен</span>";
                }
            }
        ?>
        <form action="" method>
            Введите логин:<br/> 
            <input type="text" name="log" value="admin"><br/><br/>
            Введите пароль:<br/>  
            <input type="password" name="pass" value="admin"><br/><br/>
            <input type="submit" value="Вход">
        </form>
    </div>
</body>
</html>