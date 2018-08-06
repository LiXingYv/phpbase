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
 *
 * int型最大可放2的32次方
 * 在取模运算时结果的正负仅取决于被除数
 *
 * echo $a,$b;与echo $a.$b;前者运行速度更快
 */
/**
 * 浮点数并不精确
 * 某些小数在10进制下，是有限的，转成2进制要无限循环
 * 因此，损失一些精度，导致浮点数计算和数学上结果不一致
 * 银行一般存整数，精确到分。
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
 * 字符串到数字的转换，从左到右截取，直到碰到不合法的数字，截取出来的部分转成数字
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
