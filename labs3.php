<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №3</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Лабораторная работа №3</h1>
    <h2>Теорияа, массивы в PHP</h2>
    <p>Простой массив <br/> $name = abcde |01234</p>
    <p>Ассоциативный массив <br/> $name = белый, черный, красный, зеленый синий |white, black, red, green, blue</p>

    <div>
        <?php
            $arr =[]; // создаем массив
            $arr =["пн", "вт", "ср", "чт", "пт", "сб", "вс"];//каждое значение - элемент массива 
            $arr =["пн", 256, "ср", 34, 38, "сб", 95];//каждое значение - элемент массива
            var_dump($arr);
        ?>
    </div>
    <h2>Как вывести отдельный элемент массива</h2>
    <div>
        <?php 
            echo $arr[2];
        ?>
    </div>
    <h2>Ассоциативный массив</h2>
    <div>
        <?php
            $arr =[1=>"пн", 2=>"вт", 3=>"ср", 4=>"чт", 5=>"пт", 6=>"сб", 7=>"вс"];//каждое значение - элемент массива 
            echo $arr[1]."<br/>";
            $name_worker = ["Николай"=>200, "Вася"=>300, "Петя"=>400];
            echo $name_worker["Вася"];
            $arr = [];
            $arr =[1=>"пн", "вт", "ср", "чт", "пт", "сб", "вс"];//каждое значение - элемент массива 
            echo "<br/>".$arr[3];
        ?>
        <p>Достаточно поставить ключ тоько первому элементу массива, <br/>
     У остальных будет выставленны ключи по порядку</p>
    </div>
    <h2>Многомерный массив</h2>
    <div>
        <?php
            $students = [
                'boys' => ["коля", "вася", "петя"],
                'girls' => ["Даша", "Маша", "Лена"],
            ];
            echo $students["boys"][1];
            echo $students["girls"][1];
        ?>
    </div>
    <h2>Решение Задач</h2>
    <div>
        <ol>
            <li>  
                <?php
                //1
                    $arr = ['Привет, ', 'мир', '!']; 
                    echo $arr[0], $arr[1], $arr[2];
                ?>
            </li>
            <li>  
                <?php
                //2
                    $arr = ['Привет, ', 'мир', '!']; 
                    $text = $arr[0].$arr[1].$arr[2];
                    echo $text;
                ?>
            </li>
            <li>  
                <?php
                //3
                    $arr = ['Привет, ', 'мир', '!']; 
                    $text = $arr[0].$arr[1].$arr[2];
                    echo $text;
                ?>
            </li>
            <li>  
                <?php
                //4
                    $arr = ['Привет, ', 'мир', '!']; 
                    $arr[0] = "Пока, ";
                    echo var_dump($arr);
                ?>
            </li>
            <li>  
                <?php
                //5
                    $salary = ["Коля"=>300, "Петя"=>350];
                    echo $salary["Коля"]."<br/>".$salary["Петя"];
                ?>
            </li>
            <li>  
                <?php
                //6
                    $arr = [1,2,3,4,5];
                    $arr1[0] = 1;
                    $arr1[1] = 2;
                    $arr1[2] = 3;
                    $arr1[3] = 4;
                    $arr1[4] = 5;
                    var_dump($arr);
                    
                    var_dump($arr1);
                ?>
            </li>
            <li>  
                <?php
                //7
                    $arr = [
                        'ru'=>["голубой","красный","зеленый"],
                        'eu'=>["blue","red","green"],
                    ];
                    echo $arr['ru'][0];
                ?>
            </li>
            <li>  
                <?php
                //8
                    $arr = ['a','b','c'];
                    var_dump($arr);
                    
                ?>
            </li>
            <li>  
                <?php
                //9
                    $arr = ['a','b','c'];
                    echo $arr[0], $arr[1], $arr[2];                    
                ?>
            </li>
            <li>  
                <?php
                //10
                    $arr = ['a','b','c','d'];
                    echo $arr[0]."+".$arr[1].", ".$arr[2]."+".$arr[3];                    
                ?>
            </li>
            <li>  
                <?php
                //11
                    $arr = [2,5,3,9];
                    $result = $arr[0] * $arr[1] + $arr[2]*$arr[3];
                    echo $result;
                ?>
            </li>
            <li>  
                <?php
                //12
                    $arr =[];
                    $arr[] = 1;
                    $arr[] = 2;
                    $arr[] = 3;
                    $arr[] = 4;
                    $arr[] = 5;
                    var_dump($arr)
                ?>
            </li>
        </ol>
    </div>
    <h2>Задачи на Ассоциативный массив</h2>
    <div>
        <ol>
            <li>
                <?php 
                    //1
                    $arr =['a'=>1, 'b'=>2, 'c'=>3];
                    echo $arr["c"];
                ?>
            </li>
            <li>
                <?php 
                    //2
                    $arr =['a'=>1, 'b'=>2, 'c'=>3];
                    echo $arr["c"]+$arr['b']+$arr['a'];
                ?>
            </li>
            <li>
                <?php 
                    //3
                    $arr =['Коля'=>"1000$", 'Вася'=>"500$", 'Петя'=>"200$"];
                    echo $arr["Коля"]."<br/>".$arr['Петя'];
                ?>
            </li>
            <li>
                <?php 
                    //4
                    $arr =[1=>"пн", "вт", "ср", "чт", "пт", "сб", "вс"];
                    echo $arr[6];
                ?>
            </li>
            <li>
                <?php 
                    //5
                    $day = 6;
                    $arr =[1=>"пн", "вт", "ср", "чт", "пт", "сб", "вс"];
                    echo $arr[$day];
                ?>
            </li>
        </ol>
    </div>
    <h2>Задачи на многомерные массивы</h2>
    <div>
        <ol>
            <li>
                <?php
                    //1
                    $arr = [
                        'cms' => ['joomla', 'wordpress','drupal'],
                        'colors' => ['blue'=>'голубой', 'red'=>'красный','green'=>'зеленый'],
                    ];
                    echo $arr["cms"][0].", ".$arr["cms"][2].", ".$arr["colors"]["green"].", ".$arr["colors"]["red"];
                ?>
            </li>
            <li>
                <?php
                    //2
                    $arr = [
                        'ru'=>[1=>'пн','вт','ср','чт','пт','сб','вс'],
                        'eu'=>['mon','tue','wed','thu','fri','sat','sun']
                    ];
                    echo $arr['ru'][1].' '.$arr['eu'][2];
                ?>
            </li>
            <li>
                <?php
                    //2
                    $lang = 'ru';
                    $day = 3;
                    $arr = [
                        'ru'=>[1=>'пн','вт','ср','чт','пт','сб','вс'],
                        'eu'=>['mon','tue','wed','thu','fri','sat','sun']
                    ];
                    echo $arr[$lang][$day];
                ?>
            </li>
        </ol>
    </div>
</body>
</html>