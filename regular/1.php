<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/15
 * Time: 11:53
 */
$str='abcde';
$pattern='/ab/';
$pattern='#ab#';
$pattern='-ab-';
/**
 * a-z A-Z 0-9 空格 \ 不能作为定界符 推荐使用/
 */
var_dump(preg_match($pattern,$str,$matche));
var_dump($matche);
/**
 * 常用函数
 *
 */
//preg_match();//匹配一个结果
//preg_match_all();//匹配所有结果
//preg_replace();//匹配并替换

$string = '<div>你好我好大家好</div>';
$pattern1 = '/<div>(.*)<\/div>/';
$replace = '<h1>我是被替换后的</h1>';
$newStr = preg_replace($pattern1,$replace,$string);
var_dump($newStr);
echo $newStr;