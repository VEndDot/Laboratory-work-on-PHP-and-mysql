<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №18</title>
    <style>
        h1,h2,h3,h4,h5{
            text-align: center;
            margin: 10px;
        }
        table{
            margin: 0 auto;
        }
        tr.top{
            background-color: silver;
        }
        td{
            border: solid 1px black;
            text-align: center;

            font-size: 20px;
            
        }
        td.left{
            width: 80px;
            height: 50px;
        }
        td.right{
            width: 800px;
        }
        span{
            color: red;
        }
        div{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Работа с регулярными выражениями часть 2</h1>
    <h2>Фигурные скобки</h2>
    <div>
        <?php
            // Если нужно указать конкретное число повторений
            // на помощь приходят {}
            // {5} - пять повторений
            // {2,5} - от 2 до 5 повторений
            // {2,} - два и более 
            echo preg_replace('#xa{1,2}x#', '!', 'xx xax xaax xaaax');
            echo "<br/>".preg_replace('#xa{2,}x#', '!', 'xx xax xaax xaaax');
            echo "<br/>".preg_replace('#xa{2}x#', '!', 'xx xax xaax xaaax');
        ?>
    </div>
    <h2>Группы символов \s,\S,\w,\W,\d,\D</h2>
    <div>
        <?php
            //Существуют спец команды, которые позволяют выбрать сразу целые группы символов
            // \d - означает цифра от 0 до 9
            // \D - наоборот не цифра
            echo preg_replace('#\d+#', '!', '1 12 123 abc @@@');
            echo "<br/>".preg_replace('#\D+#', '!', '123abc3@@@');
        ?>
    </div>
    <h2>Что обозначают разные группы символов</h2>
    <table>
        <tr class="top">
            <td class="left" >Символ</td>
            <td class="right" >Его значение</td>
        </tr>
        <tr>
            <td class="left" >\s</td>
            <td class="right" >Обозначает пробел или пробельный символ(имеется ввиду перевод строки, табуляция и т.п.)</td>
        </tr>
        <tr>
            <td class="left" >\S</td>
            <td class="right" >Не пробел, то есть все, кроме \s</td>
        </tr>
        <tr>
            <td class="left" >\w</td>
            <td class="right" >Цифра или буква(<span>сюда не входит кирилица</span>) Это можно исправить с помощью функции setlocale</td>
        </tr>
        <tr>
            <td class="left" >\W</td>
            <td class="right" >Не цифра и не буква</td>
        </tr>
        <tr>
            <td class="left" >\d</td>
            <td class="right" >Цифра от 0 до 9</td>
        </tr>
        <tr>
            <td class="left" >\D</td>
            <td class="right" >Не цифра от 0 до 9</td>
        </tr>
    </table>
    <div>
        <?php 
            echo preg_replace('#\s#', '!', '1 12 123 abc @@@');
            echo "<br/>".preg_replace('#\S+#', '!', '1 12 123 abc @@@');
            echo "<br/>".preg_replace('#\w+#', '!', '1 12 123a Abc @@@');
            echo "<br/>".preg_replace('#\W+#', '!', '1 12 123a Abc @@@');
        ?>
    </div>
    <h2>Квадратные скобки '['и']'</h2>
    <div>
        <?php 
            // квадратные скобки представляют стобой операцию "или"
            echo preg_replace('#[abc]xx#', '!', 'axx bxx cxx exx');
            echo "<br/>".preg_replace('#[^abc]xx#', '!', 'axx bxx cxx exx');
            // ^ - означает "НЕ". Своего рода это "!" в условии "if"
        ?>
    </div>
    <h2>Что можно еще:</h2>
    <ul>
        <li>Можно задавать группы символов: [a-z] задаст маленькие латинские буквы, [A-Z]-большие, [0-9] - цифру от 0 до 9</li>
        <li>Посложнее: [a-zA-Z] - большие и маленькие латинские буквы, то же самое плюс цифры - [a-zA-Z0-9], и так далее. Порядок значения не имеет, нет разницы [a-zA-Z] или [A-Za-z]</li>
        <li>Еще посложнее: [2-5] - цифра от 2-х до 5-ти, [a-c] - буквы от "а" до "с"</li>
    </ul>
    <h2>Особенности:</h2>
    <h3>№1</h3>
    <div>
        <?php 
            // Шляпка ^ - это спец символ. Если вам нужна шляпка как символ - просто поставте ее не в начале
            // [^d] - спецсимвол 
            // [d^] - не спецсимвол 
            echo preg_replace('#[^d]xx#', '!', 'axx bxx ^xx dxx');
            echo "<br/>".preg_replace('#[d^]xx#', '!', 'axx bxx ^xx dxx'); // означет или d или ^
            echo "<br/>".preg_replace('#[\^d]xx#', '!', 'axx bxx ^xx dxx'); // означет или d или ^

        ?>
    </div>
    <h3>№2</h3>
    <div>
        <?php 
            // желательньно экранировать дефис
            echo preg_replace('#[\-a-z0-9]xx#', '!', 'axx 9xx -xx @xx');
        ?>
    </div>
    <h3>№3</h3>
    <p>Спецсимволы внутри [] становятся обычными символами</p>
    <h3>№4</h3>
    <p>[] имеют свои свои спецсимволы - это "^" и "-", кроме того, если вам нужны квадратные скобки как символы внутри [] - то их нужно экранировать обратным слешем</p>
    <h3>№5</h3>
    <p>группы символов \s,\S,\w,\W,\d,\D будут обозначать именно группы, тоесть попрежнему будут командами</p>
    <div>
        <?php 
            echo preg_replace('#[\da-z]xx#', '!', '3xx axx Axx');
            // экранирование для d не работает будет искать цифры от 0 до 9
        ?>
    </div>
    <h3>№6</h3>
    <p>Операторы повторений записываются сразу после [] (их не нужно брать в круглые скобки)</p>
    <div>
        <?php 
            echo preg_replace("#[.a]+xx#", "!", ".xx ..xx .a.xx bxx");
        ?>
    </div>
    <h2>Особенности кириллицы</h2>
    <div>
        <?php 
            // Кириллица не входит в \w нужно делать так [а-яА-яЁё]
            // PHP не любит работать с кириллицей, поэтому, чтобы работало корректно 
            // нужно ставить модификатор "u"
            echo preg_replace('#[а-яё]яя#u','!', 'аяя ёяя 2яя');
        ?>
    </div>
    <h2>Начало "^" и конец "$" строки</h2>
    <div>
        <?php
            // существуют специальные символы, которые обозначают начало "^" или конец строки "$"
            echo preg_replace('#^aaa#','!','aaa aaa aaa');
            // заменит, если данный шаблон стоит в начале строки
            echo "<br/>".preg_replace('#aaa$#','!','aaa aaa aaa');
            // заменит, еасли шаблон стоит в конце строки
            echo "<br/>".preg_replace('#^a+$#','!','aaa');

        ?>
    </div>
    <h2>"Или" через вертикальную черту |</h2>
    <div>
        <?php
            // квадратные скобки не единственный способ сделать "или". | - тоже "или"
            echo preg_replace('#a|b+|c#','!','bbbb');
            echo "<br/>".preg_replace('#(a|b+)xx#', '!', 'axx bxx bbxx exx');
        ?>
    </div>
    <h2>Конец или начало слова \b,\B</h2>
    <div>
        <?php 
            // команда \b обозначает начало или конец слова
            // \B не начало и не конец слова
            echo preg_replace("#\b[a-z]+\b#", '!', 'axx bxx xxx exx')
        ?>
    </div>
    <h2>Проблема обратного слеша</h2>
    <div>
        <?php 
            // чтобы в регулярки вывести обратный слеш, нужно \\\\
            echo preg_replace("#\\\\#", '!', '\\ \\ \\\\');
            echo "<br/>".preg_replace("#\\\\+#", '!', '\\ \\ \\\\');
        ?>
    </div>
    <h2>Количество замен в preg_replace</h2>
    <div>
        <?php 
            // preg_replace имеет 4-тый необязательный параметр, который указывает, сколько замен произвести
            echo preg_replace("#a+#", "!", "a aa aaa aaaa", 2); // заменит два первых
            
        ?>
    </div>
    <h2>Задачи для решения</h2>
    <h2>НА {}</h2>
    <div>
        <h3>Задача №1</h3>
        <?php 
            // abba
            // abbba
            // abbbba
            echo preg_match_all('#ab{2,4}a#', 'aa aba abba abbba abbbba abbbbba', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №2</h3>
        <?php 

            echo preg_match_all('#ab{1,3}a#', 'aa aba abba abbba abbbba abbbbba', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №3</h3>
        <?php 

            echo preg_match_all('#ab{4,}a#', 'aa aba abba abbba abbbba abbbbba', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <h2>НА \s,\S,\w,\W,\d,\D</h2>
    <div>
        <h3>Задача №4</h3>
        <?php 

            echo preg_match_all('#a\da#', 'a1a a2a a3a a4a a5a aba aca', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №5</h3>
        <?php 
            // aba
            // abbba
            // abbbba
            echo preg_match_all('#a\d+a#', 'a1a a22a a333a a4444a a55555a aba aca', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №6</h3>
        <?php 
            // aba
            // abbba
            // abbbba
            echo preg_match_all('#a\d*a#', 'aa a1a a22a a333a a4444a a55555a aba aca', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №7</h3>
        <?php 
            // aba
            // abbba
            // abbbba
            echo preg_match_all('#a\Db#', 'avb a#b a2b a$b a4b a5b a-b acb', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №8</h3>
        <?php 
            // aba
            // abbba
            // abbbba
            echo preg_match_all('#a\Wb#', 'ave a#b a2b a$b a4b a5b a-b acb', $matches);
            print_r($matches[0]);
        ?>
    </div>
    <div>
        <h3>Задача №9</h3>
        <?php 
            // aba
            // abbba
            // abbbba
            echo preg_replace('#\s+#','!','ave a#a a2a a$a a4a a5a a-a aca');
        ?>
    </div>
    <h2>На [],'^' - не, [a-zA-Z], Кириллицу</h2>
    <div>
        <h3>Задача №10</h3>
        <?php 
            //aba
            //aea
            //axa
            echo preg_match_all('#a[bex]a#', 'aba aea aca aza axa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №11</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[\.b\+\*]a#', 'aba aea aca aza axa a.a a+a a*a', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №12</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[3-7]a#', 'a10a a1a a4a a5a a7a a18a a40', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №13</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[a-g]a#', 'aaa aca awa apa ava aya aua', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №14</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[a-fj-z]a#', 'aaa aca awa apa ava aya aua aia', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №15</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[a-fA-Z]a#', 'aaa aZa awa apa aAa aya aua aia', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №16</h3>
        <?php 
            //aba
            //a.a
            //a+a
            //a*a
            echo preg_match_all('#a[^ex\s]a#', 'aba aea aca aza axa a-a a#a', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №17</h3>
        <?php 
            echo preg_match_all('#w[а-яё]w#u', 'wйw wяw wёw wqw', $matches);
            print_r($matches[0])
        ?>
    </div>
    <h2>На [a-zA-Z] и квантификаторы</h2>
    <div>
        <h3>Задача №18</h3>
        <?php 
            echo preg_match_all('#a[a-z]+a#', 'aAXa aeffa aGha aza ax23a a3sSa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №19</h3>
        <?php 
            echo preg_match_all('#a[a-zA-Z]+a#', 'aAXa aeffa aGha aza ax23a a3sSa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №20</h3>
        <?php 
            echo preg_match_all('#a[a-z0-9]+a#', 'aAXa aeffa aGha aza ax23a a3sSa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №21</h3>
        <?php 
            echo preg_match_all('#[а-яА-ЯЁё]+#u', 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ', $matches);
            print_r($matches[0])
        ?>
    </div>
    <h2>НА "^", '$'</h2>
    <div>
        <h3>Задача №22</h3>
        <?php 
            echo preg_replace('#^a+#','!', 'aaa aaa aaa');
        ?>
    </div>
    <div>
        <h3>Задача №23</h3>
        <?php 
            echo preg_replace('#a+$#','!', 'aaa aaa aaa');
        ?>
    </div>
    <h2>НА "|"</h2>
    <div>
        <h3>Задача №24</h3>
        <?php 
            echo preg_match_all('#a(x+|e+)a#', 'aeeea aeea aea axa axxa axxxa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <div>
        <h3>Задача №25</h3>
        <?php 
            echo preg_match_all('#a(x+|e{2})a#', 'aeeea aeea aea axa axxa axxxa', $matches);
            print_r($matches[0])
        ?>
    </div>
    <h2>На \b, \B</h2>
    <div>
        <h3>Задача №26</h3>
        <?php 
            echo preg_replace('#\b#', '!','xbx aca aea abba adca abea');
        ?>
    </div>
    <h2>На обратный слеш \</h2>
    <div>
        <h3>Задача №27</h3>
        <?php 
            echo preg_replace('#a\\\\a#', '!','a\a abc');
        ?>
    </div>
    <div>
        <h3>Задача №28</h3>
        <?php 
            echo preg_replace('#a\\\\\\\\a#', '!','a\a a\\a a\\\a');
        ?>
    </div>
    <h2>На экранировку посложнее</h2>
    <div>
        <h3>Задача №29</h3>
        <?php 
            echo preg_replace('#/\w+\\\#', '!',"bbb /aaa\ bbb /ccc\\");
        ?>
    </div>
    <div>
        <h3>Задача №30</h3>
        <?php 
            echo preg_replace('/<b>(.*?)<\/b>/s', '!',"bbb <b> hello </b>, <b> world </b> eee");
        ?>
    </div>
</body>
</html>