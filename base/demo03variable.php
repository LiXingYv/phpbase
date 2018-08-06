<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 *
 *什么时候是null？
 * 1.变量已声明单位初始化，默认为null
 * 2.变量显示赋值为null
 * enterprise_simple.unset()销毁后，变量为null
 * 简单的讲：变量不存在或没赋值或直接赋值null则返回true
 *
 */
echo '<h3>is_null,empty,isset区别</h3>';
$val1;
$val2 = null;
$val3 = 'php';
unset($val3);
@var_dump(is_null($val1)?true:false);echo '<hr/>';
var_dump(is_null($val2)?true:false);echo '<hr/>';
var_dump(is_null($val3)?true:false);
echo '<hr/>';
/**
 * 什么时候是empty
 * 1.空字符串，空数组
 * 2.null
 * enterprise_simple.0或‘0’或false
 */
$str1='';
$str2='0';
$str3=0;
$str1=null;
$str1=false;
var_dump(empty($str1));
var_dump(empty($str2));
var_dump(empty($str3));
var_dump(empty($str4));
var_dump(empty($str5));
/**
 * isset()是null的取反操作
 * 记忆要点：变量已经存在，并且它的值不为null，返回true，否则false
 * false,未赋值并不报错，与is_null不同
 */
$domain = 'www';
$name = null;
$job;
var_dump(isset($domain));
var_dump(isset($name));
var_dump(isset($job));
/**
 * php 常用的判断变量的函数有gettype()、is_array()、is_bool()、is_float()、is_integer()、is_null()、is_numeric()、is_object()、is_resource()、is_scalar() 和 is_string()。
其中gettype()函数返回变量的类型，如“boolean”、“integer”、“double”（float类型会返回“double”，而非“float”）、“string”、“array”、“object”、“resource”、“NULL”和“unknown type”等值，表明变量类型
 */
?>
</body>
</html>
