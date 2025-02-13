<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №28_29_30</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
        body{
            display: flex;
            margin: 0;
            padding: 0;
            background-color: black;
            height: 100vh;
            align-items: center;
        }
        .left-section{
            flex: 1;
            background: wheat;
            height: 400px;
            text-align: center;
        }
        .right-section{
            flex: 1.5;
            background: linear-gradient(blue, rgb(111, 23, 38));
            height: 200px;
            text-align: center;
            color: aliceblue;
        }
        .right-section__form{
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<>
    <?php 
        // Подключение к БД
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $name_bd = 'test';
        
        $connect = mysqli_connect($host, $userName, $password, $name_bd);

    ?>

    <!--Добавление нового работника с помощью формы-->
    <div class="left-section">
        Вывод всех работников из БД, в том числе и вновь добавленных<br><br>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>salary</th>
                <th>delete</th>
            </tr>
            <?php
                function input($name){
                    if(isset($_POST[$name])){
                        $value = $_POST[$name];
                    }else{
                        $value = '';
                    }
                    return '<input name="'.$name.'" value="'.$value.'">';
                }

                // Сохранение нового (до получения)
                if(!empty($_POST)){
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $salary = $_POST['salary'];
                    
                    $query = "INSERT INTO workers0 SET name='$name', age='$age', salary='$salary'";
                    mysqli_query($connect, $query) or die(mysqli_error($connect));
                }

                // удаление по id (до получения)
                if(isset($_GET['del'])){
                    $del = $_GET['del'];
                    $query = "DELETE FROM workers0 WHERE id=$del";
                    mysqli_query($connect, $query) or die(mysqli_error($connect));
                }

                // Получение всех работников
                $query = "SELECT * FROM workers0";
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                for($data=[]; $row = mysqli_fetch_assoc($result); $data[] = $row);

                // Вывод на экран: 
                $result = '';
                foreach($data as $elem){
                    $result.='<tr>';

                    $result.='<td>'.$elem['id'].'</td>';
                    $result.='<td>'.$elem['name'].'</td>';
                    $result.='<td>'.$elem['age'].'</td>';
                    $result.='<td>'.$elem['salary'].'</td>';
                    $result.='<td><a href="?del='.$elem['id'].'">удалить</a></td>';
                
                    $result.='<tr>';
                
                }
                echo $result;
            ?>
        </table>
    </div>
    <div class="right-section">
        Добавление нового работника с помощью формы

        <form action="" method="POST">
            <?php echo "Введите имя работника      ".input('name').'<br>';?>
            <?php echo "Введите возраст работника  ".input('age').'<br>';?>
            <?php echo "Введите зарплату работника ".input('salary').'<br>';?>
            <input type="submit" value="Добавить работника">
        </form>
    </div>
</body>
</html>