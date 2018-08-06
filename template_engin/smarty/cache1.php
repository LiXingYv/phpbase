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

$id=$_GET['id'];
if(!$sm->isCached('cache1.html',$id)){//使用缓存，单模板多缓存
    $sm->assign('d',$id);
}

echo $sm->fetch('cache1.html',$id);
//$sm->display('3.html');

