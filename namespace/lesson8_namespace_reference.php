<?php
/**
 * 命名空间的引用方式分为3种：非限定名称，限定名称，完全限定名称
 */
namespace app\admin;
const SITE_NAME = 'php中文网';
function getDomain(){
    return 'www.php.cn';
}
class Demo{
    public static function hello(){
        return '祝贺党的十九大胜利召开';
    }
}
//1.非限定名称：省略空间名称，使用默认或当前的命名空间
echo SITE_NAME;
echo getDomain();
echo Demo::hello();

echo "<hr/>";
//2.限定名称：前面必须添加命名空间才可以访问，通常用于子空间
namespace app\admin\user;
const SITE_NAME = '厉害了，我的国';
function getDomain(){
    return '支持中央';
}
class Demo{
    public static function hello(){
        return '不忘初心';
    }
}

namespace app\admin;
echo user\SITE_NAME;
echo user\getDomain();
echo user\Demo::hello();


echo "<hr/>";
//3.完全限定名称：从全局空间的反斜线开始
echo \app\admin\SITE_NAME;
echo \app\admin\getDomain();
echo \app\admin\Demo::hello();
echo "<hr/>";
echo \app\admin\user\SITE_NAME;
echo \app\admin\user\getDomain();
echo \app\admin\user\Demo::hello();