<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №16</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Здачи на продвинутую работу с формами в PHP</h1>
    <h2>Примеры решения задач</h2>
    <div>
        <h3>Задача №1</h3>
        <form action="" method="GET">
            <input type="hidden" name="hello" value="0">
            <input type="checkbox" name="hello" value="1">
            <input type="submit">
        </form>
        <?php
            if(isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0){
                echo 'Не отмечен';
            }
            elseif(isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1){
                echo "Омечен";
            }
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <form action="" method="GET">

        </form>
        <?php
            function input($name, $value){
                return '<input type="text" name="'.$name.'" value="'.$value.'">';
            }
            echo input('age', 25);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <form action="" method="GET">
            <?php
                function input2($name, $value){
                    if(isset($_REQUEST[$name])){
                        $value = $_REQUEST[$name];
                    }
                    return '<input type="text" name="'.$name.'" value="'.$value.'">';
                }
                echo input2('age', 25);
            ?>
            <input type="submit">
        </form>
    </div>
    <h2>Задачи для решения</h2>
    <h3>Работа с checkbox</h3>
    <div>
        <h3>Задача №1</h3>
        <form action="" method="GET">
            Введите ваше имя
            <input type="text" name="user">
            <input type="hidden" name="userName" value="0">
            <input type="checkbox" name="userName" value="1">
            <input type="submit">
        </form>
        <?php
            if(!empty($_REQUEST['user']) and $_REQUEST['userName'] == 0){
                echo "До свидания ".$_REQUEST['user'];
            }
            elseif(!empty($_REQUEST['user']) and $_REQUEST['userName'] == 1){
                echo "Добро пожаловать ".$_REQUEST['user'];
            }
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <form action="" method="GET">
            <label >
                HTML<input type="checkbox" name="language[]" value="html">
            </label><br/>
            <label >
                CSS<input type="checkbox" name="language[]" value="css">
            </label><br/>
            <label >
                JS<input type="checkbox" name="language[]" value="js">
            </label><br/>
            <label >
                PHP<input type="checkbox" name="language[]" value="php">
            </label><br/>
            <input type="submit" value="Отправить">
        </form>
        <?php 
            if($_SERVER['REQUEST_METHOD'] == "GET" ){

                if(isset($_GET['language'])){
                    foreach($_GET['language'] as $lang){
                        if($lang == "html"){
                            echo 'html - не язык программирования';
                        }
                        elseif($lang == "css"){
                            echo 'css - не язык программирования';
                        }
                        else{
                            echo $lang;
                        }
                        echo "<br/>";
                    }
                }
            }
        ?>
    </div>
    <h3>Работа с radio переключателями</h3>
    <div>
        <h3>Задача №3</h3>
        <form action="" method="GET">
            <p>Знаешь ли ты о PHP?</p><br/>Да, знаю 
            <input type="radio" checked name="msg" value="1"><br/>
            Нет, не знаю 
            <input type="radio" name="msg" value="0"><br/>
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET['msg']) and $_GET['msg'] == '0'){
                echo "Не знаю";
            }
            if(isset($_GET['msg']) and $_GET['msg'] == '1'){
                echo "Знаю";
            }
        ?>
    </div>
    <div>
        <h3>Задача №4</h3>
        <form action="" method="GET">
            <input type="radio" name="age" id="age1" value="<20">
            <label for="age1">Менее 20 лет</label><br/>
            <input type="radio" name="age" id="age2" value="20-25">
            <label for="age2">20-25 лет</label><br/>
            <input type="radio" name="age" id="age3" value="26-30">
            <label for="age3">26-30 лет</label><br/>
            <input type="radio" name="age" id="age4" value="более 30 лет">
            <label for="age4">более 30 лет</label><br/>
            <input type="submit">
        </form>
        <?php 
            if(isset($_GET["age"])){
                echo "Ваш возраст: ".$_GET['age'];
            }
        ?>
    </div>
    <h3>Select и multi-select</h3>
    <div>
        <h3>Задача №5</h3>
        <form action="" method="GET">
            <p>
                <label for="ageU">Выберите ваш возраст</label>
                <select name="ageU" id="ageU" value=>
                    <option disabled selected>возраст</option>
                    <option value="<20">Менее 20 лет</option>
                    <option value="20-25">20-25 лет</option>
                    <option value="26-30">26-30 лет</option>
                    <option value=">30">более 30 лет</option>
                </select>
            </p>
            <p><input type="submit" value='Отправить'></p>
        </form>
        <?php 
            if(isset($_GET['ageU'])){
                echo $_GET['ageU'];
            }
        ?>
    </div>
    <div>
        <h3>Задача №6</h3>
        <form action="" method="GET">
            <p>
                <label for="lang[]">Выберите ЯП</label><br/>
                <select multiple name="lang[]" id="lang[]" >
                    <option disabled selected>ЯП</option>
                    <option value="php">php</option>
                    <option value="css">css</option>
                    <option value="js">js</option>
                    <option value="html">html</option>
                </select>
            </p>
            <p><input type="submit" value='Отправить'></p>
        </form>
        <?php 
            if(isset($_GET['lang'])){
                foreach($_GET['lang'] as $w){
                    echo $w." ";
                }
            }
        ?>
    </div>
    <h2>Задачи</h2>
    <div>
        <h3>Задача №7</h3>
        <?php 
            function inputOne($type, $name, $value){
                return "<input type=".$type." name=".$name." value=".$value.">";
            }
            echo inputOne("text", 'user', 'username');
        ?>
    </div>
    <div>
        <h3>Задача №8</h3>
        <form action="" method="GET">
            <?php 

                function inputSSS($type4, $name4, $value4){
                    if(isset($_REQUEST[$name4])){
                        $value4 = $_REQUEST[$name4]; 
                    }
                    return "<input type=".$type4." name=".$name4." value=".$value4.">";
                }
                echo inputSSS("text", 'user666', 'yourName');
            ?>
        
            <input type="submit">
        </form>
    </div>
    <div>
        <h3>Задача №9-10</h3>
        <form action="" method="GET">

            <?php 
                $n = "admin";
                
                function createCheckBox($name37){
                    $hiddenInput = "<input type='hidden' name='$name37' value='0'>";
                    $checkBoxInput = "<input type='checkbox' name='$name37' value='1'>";
                    echo $hiddenInput.$checkBoxInput;
                    $saveValue = isset($_GET[$name37]) ? $_GET[$name37] : null;
                    return $saveValue;
                   
                }
                $result = createCheckBox($n);
            ?>
            <input type="submit"><br/>
            <?php 
                echo $result;
            ?>
        </form>
    </div>
</body>
</html>