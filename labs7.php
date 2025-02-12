<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php date_default_timezone_set('Asia/Yekaterinburg');?> 
    <title>Лабораторная работа №7</title>
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
    <h1>Работа с датами в PHP</h1>
    <h2>Задачи для решения</h2>
    <h2>Timestamp: time и mktime</h2>
    <div>
        <h3>Задача №1</h3>
        <?php
            echo time();
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php
            echo mktime(0,0,0,3,1,2025);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php
            
            echo mktime(0,0,0,12,31);
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <?php
            
            echo time()-mktime(13,12,59,3,15,2000);
        ?>
    </div>
    <div>
        <h3>Задача №5</h3>
        <?php
            
            echo '<br/>'.round(((time()-mktime(7,23,48))/60)/60);
        ?>
    </div>
    <h2>Функция date</h2>
    <div>
        <h3>Задача №6</h3>
        <?php
            echo date('Y-m-d H:i:s',);
        ?>
    </div>
    <div>
        <h3>Задача №7</h3>
        <?php
            echo date('Y-m-d');
            echo "<br/>".date('d.m.Y');
            echo "<br/>".date('d.m.y',);
            echo "<br/>".date('H:i:s');

        ?>
    </div>
    <div>
        <h3>Задача №8</h3>
        <?php
            echo date('d.m.Y', mktime(0,0,0,2,12,25));
        ?>
    </div>
    <div>
        <h3>Задача №9</h3>
        <?php
            $day = date('w');
            $week = ['вс','пн','вт','ср','чт','пт','сб'];
            echo $week[$day]."<br/>День недели 06:06:2006 > ";
            $day = date('w', mktime(0,0,0, 06,06,2006));
            echo $week[$day]."<br/>День недели в мой день рождения > ";
            $day = date('w', mktime(0,0,0, 11,28,2025));
            echo $week[$day]."<br/>";

        ?>
    </div>
    <div>
        <h3>Задача №10</h3>
        <?php
            $months = [
                'Декабрь',
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',

            ];
            $month = date('n');
            echo $months[$month];
        ?>
    </div>
    <div>
        <h3>Задача №11</h3>
        <?php

            echo date('t');
        ?>
    </div>
    <div>
        <h3>Задача №12</h3>
        <p>Введите год, чтобы узнать високосный ли он</p>
        <?php 
            $year = isset($_GET['UserYear']) ? strip_tags($_GET['UserYear']) : null;
        ?>
        <form action="" method="GET">
            <input type="text" name="UserYear" value="<?=$year?>" placeholder="year">
            <input type="submit">
        </form>
        <?php
            if(is_numeric($year)){
                $whoYear = date('L', mktime(0,0,0,1,1,$year));
                if($whoYear == 1){
                    echo 'Год високосный';
                }
                else{
                    echo "Нет, год невисокосный";
                }
            }
            else{
                echo 'год должен быть числом';
            }   
        ?>
    </div>
    <div>
        <h3>Задача №13</h3>
        <form action="" method="GET">
            <p>Введите дату в формате (DD.MM.YYYY)</p>
            <input type="text" name="userDate" placeholder="DD.MM.YYYY">
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET['userDate'])){
                $uDate = strip_tags($_GET['userDate']);
                list($day, $month, $year) = explode('.',$uDate);
                echo 'Timestamp: '.mktime(0,0,0,$month,$day,$year);
                echo "<br/>dayWeek: ".date('l', mktime(0,0,0,$month,$day,$year));
            }
        ?>
    </div>
    <div>
        <h3>Задача №14</h3>
        <form action="" method="GET">
            <p>Введите дату в формате (DD-MM-YYYY)</p>
            <input type="text" name="userDate1" placeholder="DD-MM-YYYY">
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET['userDate1'])){
                list($day1, $month1, $year1) = explode("-",$_GET['userDate1']);
                echo "timestamp: ".mktime(0,0,0,$month1, $day1, $year1);
                echo "<br/>month: ".date('F', mktime(0,0,0,$month1, $day1, $year1));
            }
        ?>
    </div>
    <div>
        <h2>Сравнение дат</h2>
        <h3>Задача №15</h3>
        <?php 
            $date1 = isset($_GET['date1']) ? $_GET['date1'] : null; 
            $date2 = isset($_GET['date2']) ? $_GET['date2'] : null; 
        ?>
        <form action="" method="GET">
            <p>Введите две даты, чтобы сравнить, какая из них больше</p>
            <input type="text" name="date1" value="<?=$date1?>" placeholder="DD-MM-YYYY">
            <input type="text" name="date2" value="<?=$date2?>" placeholder="DD-MM-YYYY">
            <input type="submit">
        </form>
        <?php
            if($date1 != null and $date2 != null){
                echo "Больше: ";
                if (strtotime($_GET['date1']) > strtotime($_GET['date2'])){
                    echo $_GET['date1'];
                }
                else{
                    echo $_GET['date2'];
                }
            }
        ?>
    </div>
    <h2>На strtotime</h2>
    <div>
        <h3>Здача №16</h3>
        
        <?php
            $date3 = '2025-12-31';
            echo date('d-m-Y', strtotime($date3));
        ?>
    </div>
    <div>
        <h3>Здача №17</h3>
        <form action="" method="GET">
            <p>2025-12-31T12:13:59 Введите дату и время в формате (YYYY-MM-DDTHH:MM:SS)</p>
            <input type="text" name="dateTime">
            <input type="submit">
        </form>
        <?php
            if(isset($_GET['dateTime'])){
                $dateTime = strip_tags($_GET['dateTime']);
                $t = strtotime($dateTime);
                echo date('H:i:s d.m.Y', $t);
            }
        ?>
    </div>
    <h2>Прибавление и отнимание дат</h2>
    <div>
        <h3>Задача №18</h3>
        <?php
        
            $date4 = date_create('2025-12-31'); //2027 02 02
            date_modify($date4, '2 day 1 month 3 day 1 year - 3 day');
            echo date_format($date4, 'Y.m.d');
        ?>
    </div>
    <h2>Задачи</h2>
    <div>
        <h3>Задача № 19</h3>
        <?php 
            $secMinut = 60;
            $minHour = 60;
            $HourDay = 24;
            $year = date('Y');
            $currentYear = time();
            $endYear = mktime(0,0,0,1,1,$year + 1);
            $daysBeforeTheNewYear = floor(($endYear - $currentYear)/$secMinut/$minHour/$HourDay);
            $HoursBeforeTheNewYear = floor(($endYear - $currentYear)/$secMinut/$minHour);
            $minuteBeforeTheNewYear = floor(($endYear - $currentYear)/$secMinut);
            $secBeforeTheNewYear = floor(($endYear - $currentYear));
            //обратный отсчет
            $hour = 23 - date("H");  
            $min = 59 - date("i");  
            $sec = 59 - date("s");
            //end  
            echo "Дней до нового года: ".$daysBeforeTheNewYear."<br/>";  
            echo "Часов до нового года: ".$HoursBeforeTheNewYear."<br/>";  
            echo "Минут до нового года: ".$minuteBeforeTheNewYear."<br/>";  
            echo "Секунд до нового года: ".$secBeforeTheNewYear."<br/>";
            echo $daysBeforeTheNewYear." дней ".$hour." час ".$min." мин ".$sec." сек ";  
            echo "<br/>".date("H:i:s d.m.Y");        
        ?>
    </div>
    <div>
        <h3>Задача №20</h3>
        <p>Введите год "YYYY"</p>
        <form action="" method="GET">
            <input type="text" name="year" placeholder="YEAR">
            <input type="submit">
        </form>
        <?php 

            $desiredDay = 13;
            $friday = 5; // [вс0,пн1,вт2,ср3,чт4,пт5,сб6]
            $fridayThe13thList = [];

            if(isset($_GET['year'])){
                $userYear = $_GET['year']; 
                for($month=1; $month <= 12; $month++){
                    $monthDayYear = mktime(0, 0, 0, $month, $desiredDay, $userYear);
                    if(date('w', $monthDayYear) == $friday){
                        $nameMonth = date('F', mktime(0, 0, 0, $month));
                        $fridayThe13thList[$nameMonth] = date('d.m.Y', $monthDayYear);
                    }
                }
                echo "В $userYear-ду имеется ".count($fridayThe13thList)." пят 13:<br/>";
                var_dump($fridayThe13thList);
            }
        ?>
    </div>
    <div>
        <h2>Задача №20</h2>
        <?php
            echo "Сто дней назад был день: ".date('l',strtotime('- 100 day')) ;
        ?>
    </div>
</body>
</html>