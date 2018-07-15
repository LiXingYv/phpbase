<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/8
 * Time: 22:34
 */
namespace demo;
$name= 'peter zhu';
$obj = new \stdClass();
function strtoupper($str){//可以创建与全局重名的函数
return \strtoupper($str);//访问全局系统函数必须添加全局空间标识
}
echo strtoupper($name);