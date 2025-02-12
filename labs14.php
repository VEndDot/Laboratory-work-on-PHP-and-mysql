<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №14</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Практика на работу с пользовательскими функциями</h1>

    <div>
        <h2>Функция inArray</h2>
        <?php
            //Реализовать функцию, которая будет проверять, есть ли в массиве элемент с таким значение или нет
            //Получает значение и массив
            //Возвращает булево значение
            $arr = [1,2,3,4,'qwe','nik'];
            $value = 'qwe';

            function inArray($value, $arr){
                foreach($arr as $elem){
                    if ($value === $elem){
                        return true;
                    }
                }
                return false;
            }
            var_dump(inArray($value, $arr)); 
        ?>
    </div>
    <div>
        <h2>Простые числа</h2>
        <?php
            //Реализовать функцию isSimple
            //Принимает число
            //Возвращает булево значение
            $number = rand(1, 30);
            function isSimple($number){
                for($i=2; $i<$number; $i++){
                    if($number%$i == 0){
                        return false;
                    }
                }
                return true;
            }
            echo $number."<br/>";
            var_dump(isSimple($number));
        ?>
    </div>
    <div>
        <h2>Делители</h2>
        <?php
            //$number = rand(1,30);
            $number = 24;
            function getDivision($number){
                $result = [];
                for($i = 1; $i<=$number; $i++){
                    if($number%$i == 0){
                        $result[] = $i;
                    }
                }
                return $result;
            }
            print_r(getDivision($number));
        ?>
    </div>
    <h2>Задачи</h2>
    <div>
        <h3>Задача №1</h3>
        <?php 
            function arrayCharEngRu(){
                $russianToEnglish = [
                    'А' => 'A', 'а' => 'a',
                    'Б' => 'B', 'б' => 'b', 
                    'В' => 'V', 'в' => 'v',
                    'Г' => 'G', 'г' => 'g',
                    'Д' => 'D', 'д' => 'd',
                    'Е' => 'E', 'е' => 'e',
                    'Ё' => 'E', 'ё' => 'e',
                    'Ж' => 'Zh', 'ж' => 'zh',
                    'З' => 'Z', 'з' => 'z',
                    'И' => 'I', 'и' => 'i',
                    'Й' => 'Y', 'й' => 'y',
                    'К' => 'K', 'к' => 'k',
                    'Л' => 'L', 'л' => 'l',
                    'М' => 'M', 'м' => 'm',
                    'Н' => 'N', 'н' => 'n',
                    'О' => 'O', 'о' => 'o',
                    'П' => 'P', 'п' => 'p',
                    'Р' => 'R', 'р' => 'r',
                    'С' => 'S', 'с' => 's',
                    'Т' => 'T', 'т' => 't',
                    'У' => 'U', 'у' => 'u',
                    'Ф' => 'F', 'ф' => 'f',
                    'Х' => 'Kh', 'х' => 'kh',
                    'Ц' => 'Ts', 'ц' => 'ts',
                    'Ч' => 'Ch', 'ч' => 'ch',
                    'Ш' => 'Sh', 'ш' => 'sh',
                    'Щ' => 'Shch', 'щ' => 'shch',
                    'Ъ' => '', 'ъ' => '',
                    'Ы' => 'Y', 'ы' => 'y',
                    'Ь' => '', 'ь' => '',
                    'Э' => 'E', 'э' => 'e',
                    'Ю' => 'Yu', 'ю' => 'yu',
                    'Я' => 'Ya', 'я' => 'ya'
                ];
                return $russianToEnglish;
            }
            function translate($ruMessage){
                $russianToEnglish = arrayCharEngRu();
                $engMessage = '';
                $ruMessage = mb_str_split($ruMessage);
                foreach($ruMessage as $elem){
                    $engMessage .= isset($russianToEnglish[$elem]) ? $russianToEnglish[$elem]:$elem;
                }
                return $engMessage;
            }
            
            echo translate("Привет! Меня зовут: Николай Лысенко!")
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php 
            function nounNumber($number, $noun1,$noun2,$noun3){
                if($number == 1){
                    return "$number $noun1";
                }
                elseif($number>1 and $number<5){
                    return "$number $noun2";
                }
                else{
                    return "$number $noun3";
                }
            }
            echo nounNumber(17, 'яблоко','яблока', 'яблок');
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 
            $i = 0;
            $arr = str_split('222222');
            function luckyTicket($arr){
                if(array_sum(array_slice($arr, 0,3)) 
                === array_sum(array_slice($arr, 3,5))){
                    echo "Билет счастливый!";
                }
                else{
                    echo "Билет несчастливый";                    
                }
            }
            luckyTicket($arr);
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <?php 
            

            function sumOfDivisos($number){
                $sum = 0;
                for($i = 1; $i<$number; $i++){
                    if($number%$i == 0){
                        $sum += $i;
                    }
                }
                return $sum;
            }
            function friendlyNumbers($startNumber, $endNumber){
                $listFriendlyNumbers = [];
                for($i=$startNumber; $i<$endNumber; $i++){
                    $number1 = $i;
                    $number2 = sumOfDivisos($number1);
                    if((sumOfDivisos($number2) == $number1 and sumOfDivisos($number1) == $number2) 
                        and $number1 != $number2)
                    {
                        $listFriendlyNumbers[$number1] = $number2;
                    }
                }
                return $listFriendlyNumbers;
            }
            
            var_dump(friendlyNumbers(1,10000));
        ?>
    </div>
</body>
</html>