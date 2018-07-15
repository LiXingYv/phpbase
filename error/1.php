<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 10:19
 */
var_dump($name);//notice错误
echo '$name后续代码<br/>';
include('2.php');//warning警告
echo 'include后续代码<br/>';
//notice和warning后续代码都会继续执行，@符可以屏蔽这两个错误
add();//fatal
//fatal后续代码不会继续执行，@符不可以屏蔽这两个错误
echo 'add后续代码<br/>';
