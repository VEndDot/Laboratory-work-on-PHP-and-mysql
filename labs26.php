<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №26</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
    </style>
</head>
<body>
    <h1>Практика работы с БД в PHP. Часть 1</h1>
    <div>
        <?php 
            // Подключение к БД
            $host = 'localhost';
            $userName = 'root';
            $password = '';
            $name_db = 'test';

            function getData($result){
                for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                return $data;
            }

            function formatData($data){
                echo "<pre>";
                print_r($data);
                echo "</pre>";
            }
            $connect = mysqli_connect($host, $userName, $password, $name_db);
        ?>
    </div>
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>salary</th>
            </tr>
            <?php
                // Данный код сформирует часть таблицы
                $query = 'SELECT * FROM workers0';
                        
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                $data = getData($result);
                
                $result = '';
                foreach($data as $elem){
                    $result .= '<tr>';
                    $result .= '<td>'.$elem['id'].'</td>';
                    $result .= '<td>'.$elem['name'].'</td>';
                    $result .= '<td>'.$elem['age'].'</td>';
                    $result .= '<td>'.$elem['salary'].'</td>';
                    $result .= '</tr>';
                    
                }
                echo $result;
            ?>
        </table>
    </div>
</body>
</html>