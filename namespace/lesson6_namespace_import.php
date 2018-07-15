<?php
/**
 * 命名空间的导入，本质上就是用一个别名，来简化一个比较长的多级命名空间名称
 * 导入主要针对类，php5.6以后，也支持变量和函数的导入
 * 导入命名空间默认名称主要用use，空降别名的简化用as
 */
namespace app\index\controller;
const CITY = '合肥';
function say(){
    return '大湖名城，创新高地';
}
class User{
    public function hello(){
        return 'php是一门快速开发web应用的脚本语言';
    }
}

namespace my;
header("Content-type:text/html;charset=utf-8");//指定编码
//不用use来简化空间名称
echo \app\index\controller\CITY.'<br/>';
echo \app\index\controller\say().'<br/>';
$user = new \app\index\controller\User();
echo $user->hello();
echo '<hr/>';
//用use来导入一个命名空间，并起个简短的名字
///use关键字在php5.6以后才允许导入常量和函数但要加const和function
use const \app\index\controller\CITY;
use function \app\index\controller\say;
use app\index\controller\User;
echo CITY.'<br/>';
echo say().'<br/>';
$user = new User();
echo $user->hello();

//用as来进一步简化空间的名称
use const \app\index\controller\CITY as C;
use function \app\index\controller\say as s;
use app\index\controller\User as U;
echo "<hr/>";
echo C.'<br/>';
echo s().'<br/>';
$user = new U();
echo $user->hello();