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
 * Time: 21:52
 * 变量命名必须用$开头
 * 变量区分大小写
 * 变量不允许数字开头
 * 变量只允许字母数字和下划线，且不能用数字开头
 * 变量通常使用驼峰命名
 * 输出变量echo 变量名，可以一次性输出多个变量
 * echo是语法结构，不是函数，不能用在等号右边
 *
 *
 */
echo '<h3>变量的声明与输出</h3>';
$siteName = 'php中文网';
$SiteName = 'phpstudy';
echo $siteName,$SiteName;
echo '<hr/>';
echo ($siteName)
?>
</body>
</html>
