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
$sm->left_delimiter = '<{';//设置左边界符
$sm->right_delimiter = '}>';//设置左边界符
$sm->force_compile=true;//设置模板强制每次访问都编译，在开发中常用
$sm->caching = true;//设置缓存
$sm->cache_lifetime = 120;//设置缓存生命周期以秒为单位

$n= mt_rand(3,6);
$arr = array(
    array('id'=>1,'title'=>'小叶睡着了'),
    array('id'=>2,'title'=>'小叶又睡着了啊。。。'),
    array('id'=>3,'title'=>'小叶醒不了了。。。'),
    array('id'=>4,'title'=>'小叶醒不行了。。。。。。'),
);
if(!$sm->isCached('3.html')){//使用缓存，检查缓存是否存在，对整个模板进行缓存
    $sm->assign('n',$n);

    $sm->assign('arr',$arr);

    $sm->assign('k','JksliLkh');

}

echo $sm->fetch('3.html');//fetch需要echo而display不需要
//$sm->display('3.html');

