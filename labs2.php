<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Лабораторная работа №2</h1>
    <h2>Примеры решения задач</h2>
    <h3>Задача №1</h3>
    <?php
        echo strtoupper('minsk');
    ?>
    <h3>Задача №2</h3>
    <?php
        echo mb_strtoupper('минск');
    ?>
    <h3>Задача №3</h3>
    <?php
        echo ucfirst(strtolower('MINSK')) 
    ?>
    <h3>Задача №4</h3>
    <?php 
        $data = '31-12-2030';
        $arr = explode('-', $data);
        echo $arr[2].".".$arr[1].".".$arr[0];
    ?>
    <h2>Решение задач</h2>
    <h3>1. Работа с регистром символов</h3>
    <ol>
        <li>
            <?php
                echo strtoupper("php");
            ?>
        </li>
        <li>
            <?php
                echo strtolower("PHP");
            ?>
        </li>
        <li>
            <?php
                echo ucfirst("london");
            ?>
        </li>
        <li>
            <?php
                echo strtolower("London");
            ?>
        </li>
        <li>
            <?php
                echo ucwords("london is the capital of great britain");
            ?>
        </li>
        <li>
            <?php
                echo ucfirst(strtolower("LONDON"));
            ?>
        </li>
    </ol>
    <h3>1. Работа с strlen</h3>
    <ol>
        <li>
            <?php
                $str = "html css php";
                echo strlen($str);
            ?>
        </li>
        <li>
            <?php
                $password = strlen("asasds");
                if ($password > 5 && $password <10){
                    echo "пароль подходит";
                }
                else{
                    echo "нужно придумать другой пароль";
                }
            ?>
        </li>
    </ol>
    <h3>2. Работа с substr</h3>
    <ol>
        <li>
            <?php
                $str = "html css php";
                echo substr($str, 0,4)."<br/>";
                echo substr($str, 5,3)."<br/>";
                echo substr($str, 9,3)."<br/>";
            ?>
        </li>
        <li>
            <?php
                $str = "abcdefg";
                echo substr($str, -3,3)
            ?>
        </li>
        <li>
            <?php
                $strhttp = "http://ssdasdasd.qweqe";
                if (substr($strhttp, 0, 7) == "http://"){
                    echo "да";
                }
                else
                {
                    echo "нет";
                }    
            ?>
        </li>
        <li>
            <?php
                $strhttp = "https://ssdasdasd.qweqe";
                if((substr($strhttp, 0, 7) == "http://") || (substr($strhttp, 0, 8) == "https://")){
                    echo "да";
                }
                else{
                    echo "нет";
                }
            ?>
        </li>
        <li>
            <?php
                $strhttp = "https://ssdasdasd.png";
                if(substr($strhttp, -4, 4) == ".png"){
                    echo "да";
                }
                else{
                    echo "нет";
                }
            ?>
        </li>
        <li>
            <?php
                $strhttp = "https://ssdasdasd.jpg";
                if((substr($strhttp, -4, 4) == ".png") || (substr($strhttp, -4, 4) == ".jpg")){
                    echo "да";
                }
                else{
                    echo "нет";
                }
            ?>
        </li>
        <li>
            <?php
                $str = "akdf5q";
                if(strlen($str) > 5){
                    echo substr($str, 0, 5)."...";
                }
                else{
                    echo $str;
                }
            ?>
        </li>
    </ol>
    <h3>3. РАбота с str_replace</h3>
    <ol>
        <li>
            <?php
                $str = "31.12.2013";
                echo str_replace(".", "-", $str);
            ?>
        </li>
        <li>
            <?php
                $str = "abcabcbca";
                $str = str_replace("a", "1", $str);
                $str = str_replace("b", "2", $str);
                $str = str_replace("c", "3", $str);
                echo $str;
            ?>
        </li>
        <li>
            <?php
                $str = '1a122b2335c4162b5d645e7f8g9h8760';
                $srtN = '1234567890';
                for($i = 0; $i<strlen($srtN); $i++){
                    $str = str_replace($srtN[$i], "", $str);
                }
                echo $str;
            ?>
        </li>
    </ol>
    <h3>Работа с strtr</h3>
    <ol>
        <li>
            <?php
                $str = "abccbabsdbccbabbsbcabcbbacbbacbadfsbcabcaff;efacbbca";
                echo strtr($str, "abc", "123");
            ?>
        </li>
    </ol>
    <h3>Работа с substr_replace</h3>
    <ol>
        <li>
            <?php
                $str = "abccbabsd";
                echo substr_replace($str, "!!!",3);
            ?>
        </li>
    </ol>
    <h3>Работа с strpos,strrpos</h3>
    <ol>
        <li>
            <?php
                $str = "abc abc abc";
                echo strpos($str, 'b');
            ?>
        </li>
        <li>
            <?php
                $str = "abc abc abc";
                echo strpos($str,  'b', 6);
            ?>
        </li>
        <li>
            <?php
                $str = "abc abc abc";
                echo strpos($str,  'b', 3);
            ?>
        </li>
        <li>
            <?php
                $str = "aaa aaa aaa aaa aaa aaa aaa";
                echo strpos($str,  ' ', 4,);
            ?>
        </li>
    </ol>
    <h3>Работа с explode, implode</h3>
    <ol>
        <li>
            <?php
                $str = "html css php";
                $arr = explode(' ',$str);
                echo print_r($arr);
            ?>
        </li>
        <li>
            <?php
                echo implode(',',$arr);
            ?>
        </li>
        <li>
            <?php
                $data = '2013-12-31';
                $arr = explode('-',$data);
                echo $arr[2].".".$arr[1].".".$arr[0];
            ?>
        </li>
    </ol>
    <h3>работа с str_split</h3>
    <ol>
        <li>
            <?php
                $str = '1234567890';
                $arr = str_split($str, 2);
                echo print_r($arr);
            ?>
        </li>
        <li>
            <?php
                $str = '1234567890';
                $arr = str_split($str, 1);
                echo print_r($arr);
            ?>
        </li>
        <li>
            <?php
                $str = '1234567890';
                $arr = str_split($str, 2);
                echo implode("-",$arr) ;
            ?>
        </li>
    </ol>
    <h3>работа с trim, ltrim> rtrim</h3>
    <ol>
        <li>
            <?php
                $str = '1234567890      ';
                echo strlen($str)."<br/>";
                $str = rtrim($str);
                echo strlen($str)."<br/>";
            ?>
        </li>
        <li>
            <?php
                $str = '/php/';
                echo trim($str, '/');
            ?>
        </li>
        <li>
            <?php
                $str = 'слова слова слова.';
                echo rtrim($str, '.').".";
            ?>
        </li>
    </ol>
    <h3>работа с strrev</h3>
    <ol>
        <li>
            <?php
                $str = '12345';
                echo strrev($str);
            ?>
        </li>
        <li>
            <?php
                $str = 'madam';
                if ($str == strrev($str))
                {
                    echo "слово палиндром";
                }
                else{
                    echo "no";
                }
            ?>
        </li>
    </ol> 
    <h3>работа с str_shuffle</h3>
    <ol>
        <li>
            <?php
                $str = 'nikolyaLysenko';
                echo str_shuffle($str);
            ?>
        </li>
        <li>
            <?php
                $str = str_shuffle('abcdefghijklmnopqrstuvwxyz');
                echo substr($str, 0, 6) ;
            ?>
        </li>
    </ol>   
    <h3>Работа с number_format</h3>
    <ol>
        <li>
        <?php
            $str = '12345678';
            echo number_format($str, 0, '.', ' ');
        ?>
        </li>
        </ol>        
    <h3>Работа с str_repeat</h3>
    <ol>
        <li>
            <?php
                for($i = 1; $i<10; $i++){
                    echo str_repeat('x',$i)."<br/>";
                }
            ?>
        </li>
        <li>
            <?php
                for($i = 10; $i>0; $i--){
                    echo str_repeat('x',$i)."<br/>";
                }
            ?>
        </li>
        <li>
            <?php
                for($i = 1; $i<10; $i++){
                    echo str_repeat('123456789'[$i-1],$i)."<br/>";
                }
            ?>
        </li>
    </ol>  
    <h3>Работа с strip_tags и htmlspecialchars</h3>
    <ol>
        <li>
            <?php
                $str = 'html,<b>php</b>,js';
                echo strip_tags($str,);
            ?>
        </li>
        
        <li>
            <?php
                $str = '<div>ht<i>m</i>l,<b>php</b>,js';
                echo strip_tags($str, '<b><i>', );
            ?>
        </li>
        <li>
            <?php
                $str = 'html,<b>php</b>,js';
                echo htmlspecialchars($str,);
            ?>
        </li>
    </ol>  
    <h3>Работа с chr и ord</h3>
    <ol>
        <li>
            <?php
                $str = rand(65, 90);
                echo chr($str);
            ?>
        </li>
        
        <li>
            <?php
                $str = '';
                $len = rand(3, 7);
                for($i = 0; $i<$len; $i++){
                    $str .= chr(rand(97, 122));
                }
                echo $str;
            ?>
        </li>
    </ol> 
    <h3>Работа с strchr и strrchr</h3>
    <ol>
        <li>
            <?php
                $str = 'ab-cd-ef';
                echo strchr($str, '-cd-ef');
            ?>
        </li>
        
        <li>
            <?php
                $str = 'ab-cd-ef';
                echo strrchr($str, '-ef');
            ?>
        </li>
    </ol> 
    <h3>Работа с strstr</h3>
    <ol>
        <li>
            <?php
                $str = 'ab--cd--ef';
                echo strstr($str, '--cd--ef');
            ?>
        </li>
    </ol> 
    <h3>ЗАДАЧА</h3>
    <ol>
        <li>
            <?php
                $str = 'var_test_text_QOweij_aswj_PSldjw_aksmndk_qwpoj';
                echo str_replace(" ", '',lcfirst(ucwords(str_replace('_', ' ', strtolower($str)))));
            ?>
        </li>
    </ol> 
</body>
</html>