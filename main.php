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
    echo "��� � �������";
elseif ($kiosk):             //����� - ����
    echo "��� � �����   ";


else:
    echo '��� � ����� - 2';
endif;
echo "<hr>��� �����";

//    echo ($shop) ? "��� � �������" : "��� � �����"; //��������� �������� (? -���� : �����)

?>
    <br>
<?php
$i = 10;
switch ($i){
    case 0:
        echo "���������: 0";
        break;
    case 1:
        echo "���������: 1";
        break;
    case 2:
        echo "���������: 2";
        break;
    default:
        echo "�����";
}

?>



    <form action="main.php" method="post">
        ���:  <input type="text" name="username" placeholder="���" /><br />
        Email: <input type="text" name="email" /><br />
        <input type="submit" name="submit" value="������� ����!" />
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
        ���:  <input type="text" name="personal[name]" /><br />
        Email: <input type="text" name="personal[email]" /><br />
        ����: <br />
        <select multiple name="beer[]">
            <option value="warthog">Warthog</option>
            <option value="guinness">Guinness</option>
            <option value="stuttgarter">Stuttgarter Schwabenbr?u</option>
        </select><br />
        <input type="submit" value="������� ����!" />
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
$classname::aStaticMethod(); // 3 ������� � PHP 5.3.0
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
    // ����������� ������������ �����������
    public function myFunc()
    {
        // �� ��� ��� �������� ������������ �������
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>
<?php
    $nana = ['1','2'];
    for ($n = 0; $n < 5; $n++){
        if (!($n % 2)) echo "\n";
    for ($i = 0; $i <3; $i++){
        echo '# ';
    }
    echo "<br>";
}
?>
<?php
$arr = [1, 2, 3, 4];

var_dump($arr) ;
foreach ($arr as &$value) {
    $value = $value * 2;
}
var_dump($arr) ;

// ������ $arr ������ �����: array(2, 4, 6, 8)
unset($value); // ��������� ������ �� ��������� �������
?>