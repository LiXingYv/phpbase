<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 20:07
 */
header("Content-type:text/html;charset=utf-8");
//readfile('a.txt');//读取文件
//var_dump(file('a.txt'));//以换行为分割输出数组
$str=file_get_contents('a.txt');//原样输出字符串
var_dump($str);

/**
 * r以读的方式打开
 * r+以读写方式打开，如果文件不存在会报错
 * w以覆盖写入的方式打开，如果文件不存在会创建
 * w+以写读的方式打开
 * a以追加的方式打开，如果文件不存在会创建
 * a+允许读取
 */
$r = fopen('b.txt','a');
var_dump($r);
fwrite($r,'其实恋爱是一门学科');
fseek($r,0);//把指针移到第一位
echo fread($r,9);
fclose($r);
