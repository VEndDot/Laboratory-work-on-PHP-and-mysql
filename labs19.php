<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №19</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Работа с регулярными выражениями. Часть 3</h1>
    <div>
        <h2>Функция preg_match</h2>
        <?php 
            echo preg_match('#a+#', 'eee aaa bbb').'<br/>';
            echo preg_match('#a+#', 'eee bbb').'<br/>';
            echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
        ?>
    </div>
    <div>
        <h2>Функция preg_match_all</h2>
        <?php 
            echo preg_match_all('#a+#', 'eee aaa bbb').'<br/>';
            echo preg_match_all('#a+#', 'eee aaa aa bbb').'<br/>';
            echo preg_match_all('#a+#', 'eee bbb').'<br/>';


        ?>
    </div>
    <div>
        <h2>Карманы</h2>
        <?php 
            echo preg_match_all('#x(a+)x#', 'xax xaax xaaax', $m);
            echo "<br/>Найденные подстроки ";
            echo var_dump($m[0]);
            echo "<br/>содержимое кармана  ";
            echo var_dump($m[1]);
            echo "<br/>";
            preg_match_all('#[a-z]+\.([a-z]{2,3})#', 'domain.ru site.com hello.by', $matches);
            var_dump($matches[0]);
            echo "<br/>";
            var_dump($matches[1]);
        ?>
    </div>
    <div>
        <h2>Карманы внутри preg_replace</h2>
        <?php 
            // $1 - первый карман
            // $2 - второй карман
            echo preg_replace('#([a-z]+)@([a-z]+)#', '$2@$1', 'a@b aa@bb');
            echo "<br/>";
            echo preg_replace('#([a-z]+)#', '!$0!', 'aa bbb');
        ?>
    </div>
    <div>
        <h2>Карманы внутри регулярки</h2>
        <?php 
            // \1 - первый карман
            // \2 - второй карман
            echo preg_replace('#([a-z])\1#', '!', 'aaebbc');
        ?>
    </div>
    <div>
        <h2>Несохраняющиеся скобки</h2>
        <?php 
            // (?:a+) - они группируют, но не ложат в карман
            echo preg_replace('#(?:ab)+([a-z])#', '!$1!', 'ababx abe');
        ?>
    </div>
    <h1>Примеры решения задач</h1>
    <div>
        <h2>Задача №1</h2>
        <?php 
            echo preg_replace('#([a-z]+):(\d+)#', '$2$1', 'aaa:444 kkk:333');
        ?>
    </div>
    <div>
        <h2>Задача №2</h2>
        <?php 
            echo preg_replace('#\d{2}#', '!', '332 441 550');
        ?>
    </div>
    <h1>Задачи для решения</h1>
    <div>
        <h2>Задача №1</h2>
        <?php 
            echo preg_replace('#([a-z0-9]+)@([a-z0-9]+)#', '$2$1', 'aaa@bbb eee7@kkk');
        ?>
    </div>
    <div>
        <h2>Задача №2</h2>
        <?php 
            echo preg_replace('#([0-9])#', '$1$1', 'a1b2c3');
        ?>
    </div>
    <h2>На карманы в самой регулярке</h2>
    <div>
        <h2>Задача №3</h2>
        <?php 
            echo preg_replace('#([a-z0-9])\1#', '!', 'aae xxz 33a');
        ?>
    </div>
    <div>
        <h2>Задача №4</h2>
        <?php 
            preg_match_all('#([a-z])\1+#', 'aaa bcd xxx efg', $m);
            var_dump($m[0]);
        ?>
    </div>
    <h2>Задачи на preg_match_all</h2>
    <div>
        <h2>Задача №5</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^[a-zA-Z-._]+@[a-z]+\.[a-z]{2,3}$#', 'mail@yandex.com');
        ?>
    </div>
    <div>
        <h2>Задача №6</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            $str = 'my-mail@mail.ru mail@yandex.com my_mail@mail.ru my.mail@mail.ru mymail@mail.ru';
            preg_match_all('#[\w\-\.\_]+@[\w\-\.\_]+\.[a-z]{2,3}#u', $str, $s);
            var_dump($s[0]);
        ?>
    </div>
    <div>
        <h2>Задача №7</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^[a-z0-9\-]+\.[a-z]{2,3}$#', 'my-site123.com');
        ?>
    </div>
    <div>
        <h2>Задача №8</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^[a-z0-9\-]+\.[a-z0-9\-]+\.[a-z]{2,3}$#', 'hello.my-site.com');
        ?>
    </div>
    <div>
        <h2>Задача №9</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^http://[a-zA-Z]+\.[a-z]{2,3}$#', 'http://site.com');
        ?>
    </div>
    <div>
        <h2>Задача №10</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^(http|https)://[a-zA-Z]+\.[a-z]{2,3}$#', 'https://site.com');
        ?>
    </div>
    <div>
        <h2>Задача №11</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^(http|https)://[a-zA-Z]+\.[a-z/]{2,4}$#', 'https://site.com/');
        ?>
    </div>
    <div>
        <h2>Задача №12</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^(http|https)#', 'httpfg,ldnfweokfjwenw');
        ?>
    </div>
    <div>
        <h2>Задача №13</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#\.(txt|html|php)$#', 'httpfgldnfweokfjwenw.php');
        ?>
    </div>
    <div>
        <h2>Задача №14</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#\.(jpg|jpeg)$#', 'httpfgldnfweokfjwenw.jpeg');
        ?>
    </div>
    <div>
        <h2>Задача №15</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            echo preg_match('#^\d{1,12}+$#', '1111111111111');
        ?>
    </div>
    <div>
        <h2>Задача №16</h2>
        <?php 
        //           echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
            preg_match_all('#\d+#', 'asdfs asd 12 9asd e01 jsad23 02ijas jka10ja7sd', $m);
            $sum = 0;
            foreach($m[0] as $elem){
                $sum+=$elem;
            }
            echo $sum;
        ?>
    </div>
    <div>
        <h2>Задачи на preg_replace</h2>
        <?php 
            echo preg_replace('#(\d{2})\-([1-12]+)\-(\d{4})#','$3.$2.$1','31-12-2014');
        ?>
    </div>
    <div>
        <h2>Задачи на preg_replace</h2>
        <?php 
            echo preg_replace('#^([htp:/]+)([a-z]+\.[a-z]{2,3})$#','<a href="$1$2$3">$2$3</a>','http://site.ru');
        ?>
    </div>
</body>
</html>