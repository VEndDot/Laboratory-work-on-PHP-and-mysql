<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №12</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Задачи на приемы работы с массивами на PHP</h1>
    <h2>Задачи для решения</h2>
    <div>
        <h3>Задача №1</h3>
        <?php 
            // $arr = [
            //     'a' => 1,
            //     'b' => 2,
            //     'c' => 3,
            //     'd' => 4,
            //     'e' => 5,
            // ];
            $arr = [];
            $str = '';
            for($i=0; $i<5; $i++){
                for($j=0; $j-1<$i; $j++){
                    $str .= 'x'; 
                }
                $arr[] = $str;
                $str = '';
            }
            print_r($arr);
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php 
            // $arr = [
            //     'a' => 1,
            //     'b' => 2,
            //     'c' => 3,
            //     'd' => 4,
            //     'e' => 5,
            // ];
            $arr = [];
            $str = '';
            for($i=1; $i<5; $i++){
                for($j=1; $j<=$i; $j++){
                    $str .= "$i";
                }
                $arr[] = $str;
                $str = '';
            }
            print_r($arr);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 
            function arrauFill($value, $lenList){
                $arr = [];
                for($i=0; $i<$lenList; $i++){
                    $arr[] = $value;
                }
                return $arr;
            }

            print_r(arrauFill('xz', 5));
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <?php 
            $arr = [5,5,0,1,2,3,4,5];
            $sumArr = 0;
            $arrCount = 0;
            foreach($arr as $elem){
                $sumArr += $elem;
                $arrCount+=1;
                if($sumArr > 10){
                    echo $arrCount;
                    break;
                }
            }
        ?>
    </div>
    <div>
        <h3>Задача №5</h3>
        <?php 
            $arr2X = [[7,9,1],[4,5],[6],[1,2,3]];
            $summ = 0;
            foreach($arr2X as $elem){
                foreach($elem as $el){
                    $summ += $el;
                }
            }
            echo $summ;

        ?>
    </div>
    <div>
        <h3>Задача №6</h3>
        <?php 
            $arr3X = [[[1,2],[3,4]], [[5,6], [7,8]]];
            $summ = 0;
            foreach($arr3X as $i){
                foreach($i as $j){
                    foreach($j as $k){
                        $summ+=$k;
                    }
                }
            }
            echo $summ;

        ?>
    </div>
    <div>
        <h3>Задача №7</h3>
        <?php 
            $newArr = [];
            $countN = 1;
            for($i=0; $i<3; $i++){
                for($j=0; $j<3; $j++){
                    $newArr[$i][$j] = $countN;
                    $countN ++;
                }
            }
            print_r($newArr);
        ?>
    </div>
</body>
</html>