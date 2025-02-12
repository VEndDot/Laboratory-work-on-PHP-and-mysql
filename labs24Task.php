<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        } 
    </style>
</head>
<body>
    <div>
        <?php 
            // Устанавливаем доступы к базе данных: 
            $host = 'localhost'; //имя хоста, на локальном компьютере
            $user = 'root'; //имя пользователя, по умолчанию это root
            $password = ''; //пароль, по умолчанию пустой
            $db_name = 'test';//имя базы данных
            function connect($host,$user,$password,$db_name){
                // соединение с базой данных
                return mysqli_connect($host, $user, $password, $db_name);
            }
            function encoding($connect){
                // Устанавливаем кодировку
                mysqli_query($connect, "SET NAMES 'utf8'");
            }
            
            function queryBD($connect, $query){
                // делаем запрос к БД, результат запроса пишем в $result
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                return $result;
            }

            function getArrayBD($result){
                // преобразуем то, что отдала нам база в нормальный массив PHP
                for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                // выведем массив результатов
                return $data;
            }

            function formatedArrayDB($arrayDB){
                echo "<pre>";
                print_r($arrayDB);
                echo "</pre>";
            }
            $connect = connect($host,$user,$password,$db_name);
            encoding($connect);
        ?>
    </div>
    <h1>Задачи для решения</h1>
    <h2>НА SELECT</h2>
    <div>
        <h3>task 1</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE id=3";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 2</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE salary=1000";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 3</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE age=23";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 4</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE salary>400";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 5</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE salary>=500";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 6</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE salary != 500";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 7</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE salary <= 900";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 8</h3>
        <?php 
            $query = "SELECT salary, age, name FROM workers WHERE name='Вася'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            //formatedArrayDB($arrDb);
            foreach($arrDb[0] as $key=>$value){
                echo $key." ".$value.'<br>';
            }
        ?>
    </div>
    <h2>На OR и AND</h2>
    <div>
        <h3>task 9</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE age>25 AND age<=28";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 10</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE name='Петя'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 11</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE name='Вася' OR name='Петя'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 12</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE NOT name='Петя'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 13</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE age=27 OR salary=1000";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 14</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE (age>=23 AND age<27) OR salary=1000";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 15</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE (age>=23 AND age<=27) OR (salary>400 AND salary<1000)";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <div>
        <h3>task 16</h3>
        <?php 
            $query = "SELECT * FROM workers WHERE age=27 OR salary!=400";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);
        ?>
    </div>
    <h2>На INSERT</h2>
    <div>
        <h3>task 17</h3>
        <?php 
            $query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers WHERE name='Никита'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);            
        ?>
    </div>
    <div>
        <h3>task 18</h3>
        <?php 
            $query = "INSERT INTO workers (name, salary) VALUE ('Светлана', 1200)";
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers WHERE name='Светлана'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <div>
        <h3>task 19</h3>
        <?php 
            $query = "INSERT INTO workers (name, age, salary) 
            VALUE ('Ярослав', 30 ,1200), ('Петр', 31 ,1000)";
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers WHERE name='Ярослав' OR name='Петр'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <h2>На DELETE</h2>
    <div>
        <h2>task 20</h2>
        <?php 
            $query = "DELETE FROM workers WHERE id=7"; 
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <div>
        <h2>task 21</h2>
        <?php 
            $query = "DELETE FROM workers WHERE name='Коля'"; 
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <div>
        <h2>task 22</h2>
        <?php 
            $query = "DELETE FROM workers WHERE age = 23"; 
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <div>
        <h2>task Вернул все, как было</h2>
        <?php 
            $query = "DELETE FROM workers WHERE name = 'Петр' OR name = 'Светлана' OR name = 'Ярослав' OR name = 'Никита'"; 
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb);   
        ?>
    </div>
    <h2>На UPDATE</h2>
    <div>
        <h3>task 23</h3>
        <?php 
            $query = "INSERT INTO workers (name, age, salary) VALUES ('Вася', 25, 500)"; 
            $result = queryBD($connect,$query);
           
            $query = "UPDATE workers SET salary=200 WHERE name='Вася'";
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers WHERE name='Вася'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb); 
        ?>
    </div>
    <div>
        <h3>task 24</h3>
        <?php 
            $query = "INSERT INTO workers (name, age, salary) VALUES ('Вася', 25, 500)"; 
            $result = queryBD($connect,$query);
           
            $query = "UPDATE workers SET salary=200 WHERE name='Вася'";
            $result = queryBD($connect,$query);
            
            $query = "SELECT * FROM workers WHERE name='Вася'";
            $result = queryBD($connect,$query);
            $arrDb = getArrayBD($result);
            formatedArrayDB($arrDb); 
        ?>
    </div>
</body>
</html>