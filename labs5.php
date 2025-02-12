<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №5</title>
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
    <h1>Работа с циклами</h1>
    <h2>Работа с foreach</h2>
    <div>
        <ol>
            <li>
                <?php 
                    $arr = ['html', 'css', 'php', 'js', 'jq'];
                    foreach($arr as $elem){
                        echo $elem."<br/>";
                    }
                ?>
            </li>
            <li>
                <?php 
                    $arr = [1,2,3,4,5];
                    $result = 0;
                    foreach($arr as $elem){
                        $result += $elem;
                    }
                    echo $result;
                ?>
            </li>
            <li>
                <?php 
                    $arr = [1,2,3,4,5];
                    $result = 0;
                    foreach($arr as $elem){
                        $result += pow($elem, 2);
                    }
                    echo $result;
                ?>
            </li>
        </ol>
    </div>
    <h2>Работа с ключами</h2>
    <div>
        <ol>
            <li>
                <?php 
                    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
                    foreach($arr as $key=>$elem){
                        echo $key."-".$elem."<br/>";
                    }

                ?>
            </li>
            <li>
                <?php 
                    $arr = ['коля'=>200, 'вася'=>300,'петя'=>400];
                    foreach($arr as $key=>$elem){
                        echo $key." - зарплата ".$elem." долларов.<br/>";
                    }
                ?>
            </li>
        </ol>
    </div>
    <h2>Циклы while и for</h2>
    <div>
        <ol>
            <li>
                <?php 
                    $i = 1;
                    while($i<100){
                        echo $i.'<br/>';
                        $i+=1;
                    }
                    echo "<br/>";
                    for($i=1; $i<100; $i++)
                    {
                        echo $i."<br/>";
                    }
                ?>
            </li>
            <li>
                <?php 
                    for($i=0; $i<100; $i+=2)
                    {
                        echo $i."<br/>";
                    }
                ?>
            </li>
            <li>
                <?php 
                    for($i=0, $sum = 0; $i<100; $i+=1, $sum+=$i)
                    {
                    }
                    echo $sum;
                ?>
            </li>
        </ol>
    </div>
    <h2>Задачи</h2>
    <div>
        <ol>
            <li>
                <?php
                    $arr = [2,5,9,15,0,4];
                    foreach($arr as $elem){
                        if($elem>3 and $elem<10){
                            echo $elem."<br/>";
                        }
                    }
                ?>
            </li>
            <li>
                <?php
                    $arr = [-2,5,-9,-15,0,4,1,-5];
                    $sum = 0;
                    foreach($arr as $elem){
                        if($elem>0){
                            $sum += $elem;
                        }
                    }
                    echo $sum;
                ?>
            </li>
            <li>
                <?php
                    $arr = [1,2,5,9,4,13,4,10];
                    foreach($arr as $elem){
                        if($elem==4){
                            echo "Есть";
                            break;                            
                        }
                    }
                ?>
            </li>
            <li>
                <?php
                    $arr = ['10', '20', '30', '50', '235', '3000'];
                    foreach($arr as $elem){
                        if(str_contains('125', $elem[0])){
                            echo $elem.'<br/>';
                        }
                    }
                ?>
            </li>
            <li>
                <?php
                    $arr = [1,2,3,4,5,6,7,8,9];
                    $str = '-';
                    foreach($arr as $elem){
                        $str.= (string)$elem."-";
                    }
                    echo $str;
                ?>
            </li>
            <li>
                <?php
                    $arr = ['пн','вт','ср','чт','пт','сб','вс'];
                    foreach($arr as $elem){
                        if($elem == 'сб' or $elem == 'вс'){
                            echo "<b>$elem</b>";
                        }
                        else{
                            echo $elem;
                        }
                        echo ' ';
                    }
                ?>
            </li>
            <li>
                <?php

                    $day = 'вс';
                    $arr2 = ['пн','вт','ср','чт','пт','сб','вс'];
                    foreach($arr2 as $elem){
                        if($elem == $day){
                            echo "<i>$elem</i>";
                        }
                        else{
                            echo $elem;
                        }
                        echo ' ';
                    }
                ?>
            </li>
        </ol>
    </div>
    <h2>Задачи посложнее</h2>
    <div>
        <ol>
            <li>
                <?php 
                    $arr = [];
                    for($i = 0; $i<100; $i++){
                        $arr[] = $i;
                    }
                    var_dump($arr);
                ?>
            </li>
            <li>
                <?php 
                    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
                    $ru = [];
                    $en = [];
                    foreach($arr as $key=>$elem){
                        $ru[] = $elem;
                        $eu[] = $key;
                    }
                    var_dump($ru);
                    echo "<br/>";
                    var_dump($eu);
                ?>
            </li>
            <li>
                <?php 
                    $num = 1000;
                    $count = 0;
                    while($num > 50){
                        $num/=2;
                        $count += 1;
                    }
                    echo $num."-".$count;
                ?>
            </li>
        </ol>
    </div>
</body>
</html>