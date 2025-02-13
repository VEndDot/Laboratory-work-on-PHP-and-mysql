<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №27</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
    </style>
</head>
<body>
    <h1>Практика по работе с БД в PHP. ЧАСТЬ 2</h1>
    <!--
        Добавим возможность удаления работников
    -->

    <div>
        <!--подключение к бд-->
        <?php 
            $host = 'localhost';
            $userName = 'root';
            $password = '';
            $name_bd = 'test';
            
            $connect = mysqli_connect($host, $userName, $password, $name_bd);            

            // Удаление по id(до получения)
            if(isset($_GET['del'])){
                $del = $_GET['del'];
                $query = "DELETE FROM workers0 WHERE id=$del";
                mysqli_query($connect, $query) or die(mysqli_error($connect));
            }

            // Получение всех работников...
            $query = 'SELECT * FROM workers0';
            $result = mysqli_query($connect, $query);

        ?>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>salary</th>
            </tr>
            <?php  
                // ...Получение всех работников
                for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

                // вывод на экран
                $result = '';
                foreach($data as $elem){
                    $result.='<tr>';
                    
                    $result.='<td>'.$elem['id'].'</td>';
                    $result.='<td>'.$elem['name'].'</td>';
                    $result.='<td>'.$elem['age'].'</td>';
                    $result.='<td>'.$elem['salary'].'</td>';
                    $result.='<td><a href="?del='.$elem['id'].'">удалить</a></td>';

                    $result.='</tr>';

                }
                echo $result;
            ?>
        </table>
    </div>
</body>
</html>