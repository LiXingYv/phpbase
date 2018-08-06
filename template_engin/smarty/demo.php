<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require './smarty/Smarty.class.php';

$sm = new Smarty;
$sm->template_dir='./smartydir';//设置模板路径
$sm->left_delimiter = '<{';//设置左边界符
$sm->right_delimiter = '}>';//设置左边界符

$d = '访问变量';
$sm->assign('d',$d);

$arr=['a'=>'数组小明','b'=>'数组大红'];
$sm->assign('tit',$arr);

class A{
    public $b = '类属性';
}
$a= new A();
$sm->assign('a',$a);

$sm->display('2.html');



