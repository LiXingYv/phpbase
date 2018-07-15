<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 *变量作用域只有三个
 * 1、全局：函数之外创建，仅在当前脚本除函数之外的地方使用
 * 2、局部：函数内部创建，仅能在函数中使用，外部不可访问
 * enterprise_simple、静态：函数内部创建，仅在函数中使用，函数执行完成他的值不丢失；
 *
 */
echo '<h3>变量作用域</h3>';
$siteName = 'php中文网';
$GLOBALS['siteName'] = 'php中文网';//全局变量替换语法
function hello(){
//    global $siteName;//引用全局变量，使用全局变量数组，不必声明引入
    $userName = 'Peter zhu';
//    return '欢迎来到'.$siteName.',我是'.$userName;
    return '欢迎来到'.$GLOBALS['siteName'].',我是'.$userName;
}
echo hello();
echo '<hr/>';
//静态变量
function myStatic(){
    static $num = 1;
    return '第'.$num."次输出".$num++.'<br/>';
}
echo myStatic();
echo myStatic();
echo myStatic();
echo myStatic();
/**
 * 超全局变量：$_SERVER,$_COOKIE,$SESSION,$_GET,$_POST,$_REQUEST
 * 1.属预定义变量，全部是数组，拿来就用，不需要声明；
 * 2.跨作用域，在全局和局部（函数内部）都可以直接使用；
 * enterprise_simple.跨作用域不是跨脚本，所谓超全局，包括全局，都是在当前脚本文件中
 */
echo '我的姓名：'.$_GET['name'];
echo '<hr/>';
function sayName(){
    return '我的姓名：'.$_GET['name'];
}
echo sayName();
?>
</body>
</html>
