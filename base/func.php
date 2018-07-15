<html>
<head>
    <meta charset="utf-8">
    <title>php中文网</title>
</head>
<body>
<?php
/**
 * 函数的种类：自定义函数，系统函数，匿名函数
 * 函数的参数：自定义参数，默认参数，引用参数，回调函数
 * 默认参数：第一要放到后面，它的值不能是表达式，必须是常量，直接量，标量
 */

//1.自定义函数
function hello($course='php'){
    return '欢迎学习'.$course.'课程~~<br/>';
}
echo hello();
echo hello('mysql');
//用系统函数调用
echo call_user_func('hello','python');
echo call_user_func_array('hello',['java']);

//2.系统函数,不允许重定义


//enterprise_simple.匿名函数，不是没有名字，它的名字可以是任意的
//匿名函数，也叫闭包函数
//enterprise_simple.1匿名函数当作变量值来用，用匿名函数来实现算数四则运算

$result = function($n,$m,$opt){
    switch($opt){
        case '+':
            $temp = $n+$m;
            break;
        case '-':
            $temp = $n-$m;
            break;
        case '*':
            $temp = $n*$m;
            break;
        case '/':
            $temp = $n/$m;
            break;
        case '%':
            $temp = $n%$m;
            break;
        default:
            $temp = '操作符错误，请检查~~';
            break;
    }
    return $n.$opt.$m.'='.$temp.'<br/>';
};

echo $result(3,4,'+');
echo $result(12,9,'-');
echo $result(5,3,'*');
echo $result(39,7,'/');
echo $result(18,5,'%');
echo $result(18,5,'&');

//2.当匿名函数出现在函数参数的位置，这时他就是一个回调函数
//把函数当作另一个函数的参数，这个函数就是回调函数
$arr = [3,5,2,8,19,22,6];
//返回数组中的奇数
$temp = array_filter($arr,function($val){
//   return $val%2;//获取奇数
   return !($val%2);//获取偶数
});
print_r($temp);
