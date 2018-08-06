<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 *常量三要素
 * 1、1一旦创建，不可删除不可修改
 * 1、2不在头部添加$，通常只用大写字母加下划线
 * 1、3全局作用域，在函数中无需声明直接使用
 *
 * 创建
 * 2、1函数define('CONST_NAME',表达式)；
 * 2/2关键字：const contName = 静态标量，能用在类里，不能用在函数中
 *
 * 访问
 * enterprise_simple/1关键字echo 直接访问：echo 变量名
 * enterprise_simple/2函数：constant（’常量名‘）
 * enterprise_simple/3函数：get_defined_constants():获取全部常量
 *
 * 检测
 * defined（’常量名‘）
 *
 * 系统常量/魔术常量
 * __FILE__找打你的文件
 * __LINE__你代码所在的行数
 * __DIR__找到你当前访问文件的所在目录
 * PHP_OS获取系统信息
 * __PHP_VERSION获取版本信息
 * __FUNCTION__获取当前函数名
 * M_PI圆周率
 * __MHTHOD__获取当前成员方法名
 * __NAMESPACE__获取当前命名空间名称
 * __TRAIT__获取当前TRAIT名字（多继承）
 * __CLASS__获取当前类名
 */

//真实开发一般这样
if(!defined('PI')){
    difine('PI',3.14);
}

//动态常量名，用变量的值做常量的名字，该如何做？
$chang = 'HEI';
constant('HEI');
constant($chang);

echo '<h3>常量的声明，赋值与输出</h3>';
define('SITE_NAME','Peter Zhu的博客');
const COUNTRY = '中国';
echo SITE_NAME,COUNTRY;
echo '<hr/>';
echo constant('SITE_NAME');//取常量值
echo constant('COUNTRY');
echo '<hr/><pre>';
print_r(get_defined_constants());
echo "<hr/>";
echo defined('SITE_NAME')?'已定义':'未定义';

/**
 * 超级全局变量
 */
$_GET;//地址栏上获得的值
$_POST;//POST表单发送的值
$_REQUEST;//既有GET又有POST的内容,由php.ini配置，默认post会覆盖get

$_SESSION;//
$_COOKIE;
$_FILES;

$_ENV;//服务器操作系统的环境变量，如操作系统类型，linux，win，mac，环境变量等，容易暴露服务器信息，一般不允许显示，php.ini里可以配置，可以禁用。禁用后如何获取环境信息？
$_SERVER;//获取网站的域名,以及当前访问的脚本，客户ip（REMOTE_ADDR,HTTP_X_FORWARD_FOR）

$GLOBALS;//是对全局变量花名册的一个别名，通过该变量，可以任意访问全局变量



?>
</body>
</html>
