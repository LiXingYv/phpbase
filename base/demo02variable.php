<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/6/26
 * Time: 22:10
 */
echo '变量类型与转换';
/**
 * 标量类型：整形，浮点型，字符串，布尔
 */
$age=30;
echo $age;
print '<br/>';print '$age';
var_dump($age);
/**
 * 复合类型：数组和对象
 * print_r专门输出数组
 */
$books = array('php','mysql','html');
$books1= ['php1','mysql1'];
$student = new stdClass();
print_r($books);
print '<br/>';
print_r($books1);
print '<br/>';
var_dump($books);
print '<br/>';
var_dump($student);
print '<br/>';
/**
 * 特殊类型：资源类型，null
 */
$file = fopen('demo01variable.php','r')or die('打开失败');
echo fread($file,filesize('demo01variable.php'));
fclose($file);
echo '<br/>';
$price = null;
echo '$price is '.$price;
echo '<br/>';
/**
 * 类型查询 gettype($var)
 * 类型检测 is_int()
 * 类型转换：
 * 强制转换：（int）$var
 * 临时转换：值转换类型不变intval(),floatval(),strval(),
 * 永久转换：settype($var,类型标识符)
 */
$price = 145.86;
echo gettype($price);
echo '<br/>';
echo (int)$price;
echo '<br/>';
echo gettype($price);
echo '<br/>';
echo intval($price);
echo '<br/>';
echo $price;
settype($price,'integer');
echo '<br/>';
echo gettype($price);
echo '<br/>';
echo is_int($price)? 'integer':'double';
?>
</body>
</html>
