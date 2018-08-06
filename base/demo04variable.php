<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 *变量运算根据返回值类型分：
 * 1.算数运算：返回数值型
 * 2.逻辑运算符返回布尔
 * 3.字符运算返回字符串
 * 返回都是标量，四大基本类型
 *
 *
 * $li = &wang;//引用赋值
 * unset($a);//销毁变量
 *
 *
 *动态变量名
 *
 * $liubei = '河北人';
 * $laoda = 'liubei';
 * $paihang = 'laoda';
 * echo $$laoda;
 * echo ${$laoda};
 * echo $$$paihang;
 *
 *
 *
 */
echo '<h3>变量运算符</h3>';
$siteName = 'php中文网';
$SiteName = 'phpstudy';
echo '欢迎来到'.$siteName;
echo '<hr/>';
var_dump(5+'a');
echo '<hr/>';
var_dump(5+'1a');
echo '<hr/>';
var_dump(5+'a1');
?>
</body>
</html>
