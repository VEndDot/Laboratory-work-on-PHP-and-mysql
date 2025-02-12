<?php 
    try{

        $pdo = new PDO('mysql:host=localhost; dbname=ijdb', 'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');    
    }
    catch(PDOException $e){
        $error = 'Невозможно установить соединение!';
        include 'error.html.php';
        exit();
    }

    try{
        $sql = 'SELECT joketext FROM joke';
        $result = $pdo->query($sql);
    }catch(PDOException $e){
        $error = 'Ошибка при извлечении шуток: '.$e->getMessage();
        include 'error.html.php';
        exit();
    }

    while($row = $result->fetch()){
        $jokes[] = $row['joketext'];
    }
    include 'jokes.html.php';
?>