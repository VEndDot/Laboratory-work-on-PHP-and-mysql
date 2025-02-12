<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №4</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
        }
        span{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Лабораторная работа №4</h1>
    <h2>Решение задач</h2>
    <h3>Работа с if-else</h3>
    <div>
        <ol>
            <li>
                <?php 
                    //1
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem === 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //2
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem > 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //3
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem < 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //4
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem >= 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //5
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem <= 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //6
                    $a = [1,0,-3];
                    foreach($a as $elem){
                        if($elem != 0){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //7
                    $a = ["test",'тест',3];
                    foreach($a as $elem){
                        if($elem === "test"){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    //8
                    $a = ["1",1,3];
                    foreach($a as $elem){
                        if($elem === "1"){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
        </ol>
    </div>
    <h3>Работа с empty и isset</h3>
    <div>
        <ol>
            <li>
                <?php
                    //1
                    $a = [1,3,-3,0,null,true,'','0'];
                    foreach($a as $elem){
                        if(empty($elem)){
                            echo "<span>Верно</span>";
                        }else{
                            echo "Неверно";
                        } 
                    }
                ?>
            </li>
            <li>
                <?php
                    //2
                    $a = [1,3,-3,0,null,true,'','0'];
                    foreach($a as $elem){
                        if(!empty($elem)){
                            echo "<span>Верно</span>";
                        }else{
                            echo "Неверно";
                        } 
                    }
                ?>
            </li>     
            <li>
                <?php
                    //3
                    $a = [3,null,];
                    foreach($a as $elem){
                        if(isset($elem)){
                            echo "<span>Верно</span>";
                        }else{
                            echo "Неверно";
                        } 
                    }
                ?>
            </li>   
            <li>
                <?php
                    //4
                    $a = [3,null,];
                    foreach($a as $elem){
                        if(!isset($elem)){
                            echo "<span>Верно</span>";
                        }else{
                            echo "Неверно";
                        } 
                    }
                ?>
            </li> 
        </ol>
    </div>
    <h3>Работа с логическими переменными</h3>
    <div>
        <ol>
            <li>
                <?php 
                    $var = true;
                    if($var){
                        echo "Верно";
                    }
                    else{
                        echo "Неверно";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $var = false;
                    if(!$var){
                        echo "Верно";
                    }
                    else{
                        echo "Неверно";
                    }
                ?>
            </li>
        </ol>
    </div>
    <h3>Работа с OR AND</h3>
    <div>
        <ol>
            <li>
                <?php 
                    $arr = [5,0,-3,2];
                    foreach($arr as $a){
                        if($a>0 and $a<5){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    $arr = [5,0,-3,2];
                    foreach($arr as $a){
                        if($a==0 or $a==2){
                            echo ($a+7).'<br/>';
                        }
                        else{
                            echo ($a/10).'<br/>';
                        }
                    }
                ?>
            </li>
            <li>
                <?php 
                    $a = [1,0,3];
                    $b = [3,6,5];
                    
                    for($i = 0; $i<3; $i++){
                        if($a[$i]<=1 and $b[$i]>=3){
                            echo $a[$i] + $b[$i];
                        }
                        else{
                            echo $a[$i] - $b[$i];
                        }
                        echo "<br/>";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $a = [1,0,3];
                    $b = [3,6,5];
                    
                    for($i = 0; $i<3; $i++){
                        if(($a[$i]>2 and $a[$i]<11) or ($b[$i]>=6 and $b[$i]<14)){
                            echo "Верно";
                        }
                        else{
                            echo "Неверно";
                        }
                        echo "<br/>";
                    }
                ?>
            </li>
        </ol>
    </div>
    <h3>switch-case</h3>
    <div>
        <ol>
            <li>
                <?php
                    $num = 4;
                    $result = '';
                    switch($num){
                        case 1:
                            $result = "зима";
                            break;
                        case 2:
                            $result = "лето";
                            break;
                        case 3:
                            $result = "весна";
                            break;
                        case 4:
                            $result = "осень";
                            break;
                        
                    }
                    echo $result;
                ?>
            </li>
        </ol>
    </div>
    <h2>ЗАДАЧИ</h2>
    <div>
        <ol>
            <li>
                <?php 
                    $day = rand(1,31);
                    if($day>=1 and $day<=10){
                        echo "$day первая декада";
                    }
                    elseif($day>=11 and $day<=20){
                        echo "$day вторая декада";
                    }
                    elseif($day>=21 and $day<=31){
                        echo "$day третья декада";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $month = rand(1,12);
                    if($month == 12 or $month == 1 or $month==2){
                        echo "$month зима";
                    }
                    elseif($month>=3 and $month<=5){
                        echo "$month весна";
                    }
                    elseif($month>=6 and $month<=8){
                        echo "$month лето";
                    }
                    elseif($month>=9 and $month<=12){
                        echo "$month оснь";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $year = rand(1600, 2000);
                    echo "$year ";
                    if(($year%4==0 and $year%100!=0) or $year%400==0){
                        echo "високосный";
                    }
                    else{
                        echo "не является високосным";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $str = 'abcde';
                    if($str[0] == 'a'){
                        echo 'да';
                    }
                    else{
                        echo 'нет';
                    }
                ?>
            </li>
            <li>
                <?php 
                    $str = '12345';
                    if(str_contains("123", $str[0])){
                        echo 'да';
                    }
                    else{
                        echo 'нет';
                    }
                ?>
            </li>
            <li>
                <?php 
                    $sum = 0;
                    $str = str_split('123');
                    foreach($str as $s){
                        $sum += (int)$s;
                    }
                    echo $sum;
                ?>
            </li>
            <li>
                <?php 
                    $sum1 = 0;
                    $sum2 = 0;
                    $str = str_split('134224');
                    for($i = 0; $i<count($str); $i++){
                        if($i<=2){
                            $sum1 += $str[$i]; 
                        }
                        else{
                            $sum2 += $str[$i];
                        }
                    }
                    if($sum1 == $sum2){
                        echo "да";
                    }
                    else{
                        echo "нет";
                    }
                ?>
            </li>
        </ol>
    </div>
</body>
</html>