<!doctype html>
    <html>
<?php
//
//function double($i)
//{
//    return $i*2;
//}
//$b = $a = 5;        /* присвоить значение пять переменным $a и $b */
//$c = $a++;          /* постфиксный инкремент, присвоить значение $a
//                      // (5) переменной $c */
//$e = $d = ++$b;     /* префиксный инкремент, присвоить увеличенное
//                       значение $b (6) переменным $d и $e */
//echo "";
//echo ($a);
//                    /* в этой точке и $d, и $e равны 6 */
//
//$f = double($d++);  /* присвоить удвоенное значение $d перед
//*/
//echo "','$d";
//echo ",$f,";
//$g = double(++$e);  /* присвоить удвоенное значение $e после
////                       инкремента (2*7 = 14) переменной $g */
//$h = $g += 10;      /* сначала переменная $g увеличивается на 10,
////                       приобретая, в итоге, значение 24. Затем значение
////                       присвоения (24) присваивается переменной $h,
////                       которая в итоге также становится равной 24. */
//echo "$h \n";
//
//
//$i = 'A';
//for($n=0; $n<10; $n++)
//    echo ++$i . "\n ";
//
///*
//   Результат работы будет следующий:
//
//X
//Y
//Z
//AA
//AB
//AC
//
//*/
//?>
<!--<br>-->
<?//
//$foo = 'bob';              // Присваивает $foo значение 'Боб'
//$bar = &$foo;              // Ссылка на $foo через $bar.
//$bar = "My name $bar,\n";  // Изменение $bar...
//echo $bar;
//echo $foo;                 // меняет и $foo.
//
//?>
<!--<br>-->
<?php
//
//
//
//$m = 1;
////$b = 2;
//$lol = "x";
//function Sum(){
//    global $m;
//
//    $n = &$m;
//    echo "$n, $m <br>";
//
//    $n += $m++ + $n;
//    echo "$n, $m <br>";
//}
//$x = 5;
//$y = 5;
//function calc(&$lol, &$lel = 7){
//    $lol += 2;
//    $lel *= 2;
//    echo $lol;
//}
//
//
//
//Sum();
//
//echo "$b \n , $m";
//?>
<!---->
<!--<br>-->
<!--<h1>static</h1>-->
<?php
//function test()
//{
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//test();
//test();
//print_r($a);
//?>
<!--<br>-->
<?php
//function test1()
//{
//    static $count = 0;
//
//    $count++;
//    echo $count;
//    if ($count < 11) {
//        test1();
//    }
//    $count--;
//
//}
//test1();
//?>
<!---->
<!---->
<?
    for($i = 0;$i < 20;$i++){
        if(($i == 5) || ($i == 6)) {
            continue;
        }
        var_dump($i . "<br>");
    }

    echo "<pre>";
    $symbol = "# ";
    $row = 8;
    $cols = 4;
    for($i = 0;$i < $row;$i++){
        if(!($i % 2)) echo " ";
        for($j = 0;$j < $cols;$j++){
            echo $symbol ;
        }
        echo "<br>";
    }

    echo "<br><br><br><br><br><br>";

//function razrivBrauzera($data = false){
//    $symbol = "# ";
//    $row = 2;
//    $cols = 3;
//    $str_to_out = "";
//    $space = " ";
//    for($i = 0;$i<$row;$i++){
//        if($data == false){
//            if(!($i % 2)) $str_to_out .= $space;
//        }else{
//            if(($i % 2)) $str_to_out .= $space;
//        }
//
//        for($j = 0;$j < $cols;$j++){
//            $str_to_out .= $symbol;
//        }
//        $str_to_out .= "\n";
//    }
//    echo $str_to_out ."<br>";
//}
//
//for($x = 0;$x < 4;$x++){
//    if($x % 2 == 0){
//        razrivBrauzera(false);
//    }else{
//        razrivBrauzera(true);
//    }
//}
?>
<?php
//$obj = 10;
//function test_global_ref() {
//    global $obj;
//    $obj = &new stdclass;
//}
//
//function test_global_noref() {
//    global $obj;
//    $obj = new stdclass;
//}
//
//test_global_ref();
//var_dump($obj);
//test_global_noref();
//var_dump($obj);
//?>
<?php
//
//$a = 'hello';
//$$a = 'world';
//echo "<br>$a, $hello<br>";
//?>
<?php
class foo {
    public $bar = 'I am bar. i govno'; //1
    public $arr = array('I am A.', 'I am B.', 'I am C.');
    public $r   = 'I am r.';
    public $baz = 'smth';
    public $foo = 'tratata';
}

$foo = new foo(); //1
$bar = 'bar'; //1
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n"; //1
echo $foo->$baz[0] . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr'; // используется как массив буква r
echo $foo->$arr{1} . "\n"; // Обращаемся к символу строки!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo $foo->{$arr}[1] . "\n"; // используется целое arr а дальше передается значение 1

?>
<? setlocale(LC_ALL, "ru");
    $day = strftime('%A');
    echo <<<LABEL
   $
$
LABEL;
echo "\$, \" \n \f \\";

?>
<h1><?= $day?></h1>
<pre> pampam
:tata

a</pre>
<?
    $str ='Hello, world!';
  //  $pos = strlen($str) -1;
    echo $str{strlen($str) -1};
    ?>
<br>
<?
    $a = 3;
    $b = 9;
    echo $a % $b; // остаток от деления 3 как в столбик

    $result = 4 && 5;
    echo $result . "\n";
$result = 2 || 5;             //!!!!!!!!!!!!!!!!!!!!!!!!!!! pass me a question
    echo $result;

$result = 1 ^ 4;
echo $result;


?>
<?php
    $shop = true;
    if($shop)
        echo 'Иду в магазин';
        echo '<hr>Иду домой';
?>
</html>




