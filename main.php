<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.09.2016
 * Time: 19:36
 */
class popka

{
    public $jopka = array('huk', 'penis');


}
$jopka = new popka();
$job = 'jopka';
echo $jopka->{$job}[0];
?>
    <br>
    <br>
<?php
$shop = false; $kiosk = false;
if($shop) :
    echo "Иду в магазин";
elseif ($kiosk):             //иначе - если
    echo "Иду в киоск   ";


else:
    echo 'Иду в киоск - 2';
endif;
echo "<hr>Иду домой";

//    echo ($shop) ? "Иду в магазин" : "Иду в киоск"; //Тернарный оператор (? -Если : Иначе)

?>
    <br>
<?php
$i = 10;
switch ($i){
    case 0:
        echo "Результат: 0";
        break;
    case 1:
        echo "Результат: 1";
        break;
    case 2:
        echo "Результат: 2";
        break;
    default:
        echo "Много";
}

?>



    <form action="main.php" method="post">
        Имя:  <input type="text" name="username" placeholder="Имя" /><br />
        Email: <input type="text" name="email" /><br />
        <input type="submit" name="submit" value="Отправь меня!" />
    </form>
<?php
echo $_POST['username'];
echo "\n";
echo $_REQUEST['email'];
?>
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(var_dump($_POST, true));
    echo '</pre>';
}
?>
    <form action="" method="post">
        Имя:  <input type="text" name="personal[name]" /><br />
        Email: <input type="text" name="personal[email]" /><br />
        Пиво: <br />
        <select multiple name="beer[]">
            <option value="warthog">Warthog</option>
            <option value="guinness">Guinness</option>
            <option value="stuttgarter">Stuttgarter Schwabenbr?u</option>
        </select><br />
        <input type="submit" value="Отправь меня!" />
    </form>
<?php

class Foo {
    public static function aStaticMethod() {
        echo "nana";
    }
}

Foo::aStaticMethod(); //1

echo "<br>";

$obj = new Foo();
echo $obj->aStaticMethod()."<br>"; //2
echo $obj->aStaticMethod()."<br>"; //2

$classname = 'Foo';
$classname::aStaticMethod(); // 3 Начиная с PHP 5.3.0
?>

<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Перекрываем родительское определение
    public function myFunc()
    {
        // Но все еще вызываем родительскую функцию
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>
<?php
    $nana = array( array("puk" => "tik",'2','3','4'),
                    array('na','ta','pu'),
                    array('a','nu','ga'));
    for ($n = 0; $n < 3; $n++){ //kol-vo strok
     //   if (!($n % 2)) echo "\n";
    for ($i = 0; $i < 3; $i++){ //kol-vo stilbcov

        echo $nana[$n][$i];
    }
        echo "<br>";
}  echo "<br>";
echo $nana [0]['puk'];
?>
<?php
function nums ($n1, $n2, &$sub, &$mult, &$div){
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;
    return $n1 + $n2;
}

$nums = nums(2, 4, $a, $b, $c);
echo $nums; //6
echo $a; //-2



?>
<pre>
<?php
$arr = [1, 2, 3, 4];
$arr[6] = 2;
//$arr = array(8 => 2);

unset($arr[6]);
var_dump($arr);
foreach ($arr as &$value) {
    $value = $value * 2;
    //if (!($value % 2)) echo "<br>";
    foreach ($arr as &$tata) {
        $tata = $tata *3;
    }
}
var_dump($arr) ;
echo "<br>";

$arr[3] = 3;
$arr[4] = array(
        7 => true,
        "pass" => "1234"
);

echo count($arr);
echo "<br>";

var_dump($arr);
// массив $arr сейчас таков: array(2, 4, 6, 8)
unset($value); // разорвать ссылку на последний элемент
?>

<?php
class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Доступ к закрытому методу.';
    }

    public function baz(Test $other)
    {
        // Мы можем изменить закрытое свойство:
        $other->foo = 'hello';
        var_dump($other->foo);

        // Мы также можем вызвать закрытый метод:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));
?>
<br>
<?php
function zema (){
    return array(1,2,3,4);
}
$o = 2;
$oo = 5;
$ooo = 9;
list($o, $oo, $ooo) = zema();
$zema = zema;
var_dump("$zema");
?>

<?php
    for ($i=0;$i<=10;$i++){
      if(!($i % 2))
      {
           continue;
       }

        echo $i."<br>";
    }

$str = 'Pesun';
$i = 0;
$len = strlen($str);

while ($i < $len){
    echo $str{$i}.'<br>';
    $i++;
}


$arr = ['a'=>'one', 'b'=>'two', 'c'=>'three'];
foreach ($arr as $key => $var){
    print_r("$key: $var\n");
}
unset($arr);

$arr = [1, 2, 3];

foreach ($arr as &$sonya) {
    $sonya = $sonya * 2;
}
print_r($sonya);
echo "<br>";
print_r($arr);
?>
/****************************************/
<?php
    function nana(){
    echo "<h1>Hello!</h1>";
    }

    nana();

if(function_exists("nana")){
    echo '1';}
    else{
        echo '2';
}
?>
@media all and (orientation:portrait) and (min-color-index: 256) {}
    @media all and (min-color-index: 256) {
 ...
}
    <?php
    function FunctionArray($count)
{
    var $arr = [];
    for (var $i = 0; i &$lt; $count; i++) {
        $arr[$i] = function() { alert($i) };
    }
    return arr;
}

var $i=100;
var $arr = FunctionArray($i);

//Проверка
echo $arr[0]();



