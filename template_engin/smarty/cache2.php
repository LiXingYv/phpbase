<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/24
 * Time: 21:48
 */
require './smarty/Smarty.class.php';

$sm = new Smarty;
$sm->template_dir='./smartydir';//设置模板路径
$sm->caching = true;//设置缓存
$sm->cache_lifetime = 120;//设置缓存生命周期以秒为单位

//局部缓存
$sm->assign('a','我是不缓存的',true);//不缓存的模板变量
$sm->assign('d','我是缓存的');//缓存的模板变量

function insert_ss(){
    echo 1111111;
}

echo $sm->fetch('cache2.html');
//$sm->display('3.html');

