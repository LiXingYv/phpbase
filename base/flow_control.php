<?php
/**
 * 1.单分支：if(){}
 * 2.双分支：if(){}else{}
 * 3.多分支：if()elseif(){}elseif()
 * 4.三元运算符：条件？true:false
 * 5.switch结构
 */
//switch(){
//
//}
$car = true;
$b =1;
if($house && ($b = 6)){//$b=6被短路，没机会执行
}
echo $b;//此时输出1

if($house || ($b = 6)){//
}
echo $b;//此时输出6

$b =1;
if($car || ($b = 6)){////$b=6被短路，没机会执行
}
echo $b;//此时输出1

//利用短路写出简短的判断代码
if(!defined('PI')){
    define('PI');
}
defined('PI')||define('PI',3.14);//利用短路特性省去一个if语句

$a=3;
$c=5;
if($a=5 || $c=7){//此处$a变成了true，$c被短路不能被执行
    $a++;//对布尔值++还是true
    $b++;
}
echo $a,$b;//输出1，和6，布尔true输出是1