<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 20:38
 */
var_dump(pathinfo('a.txt'));
var_dump(basename('a.txt'));//获取文件名
var_dump(dirname('a.txt'));//获取文件路径
$arr= ['username'=>'zhangsan','pass'=>'123'];
var_dump(http_build_query($arr));//转成请求参数
var_dump(parse_url('http://localhost/base/file/file.php?username=zhangsan&pass=123'));//分析url路径
parse_str('username=zhangsan&pass=123');//将字符串解析成多个变量
echo $username;
echo $pass;
file_exists();//判断文件是否存在
is_file();//判断是否是一个文件
is_dir();//判断是否是一个文件夹
is_writable();//判断是否可写
is_readable();//判断是否可读
is_executable();//是否可执行
chmod();//改变权限，最大权限0777
file_put_contents();//和依次调用fopen(),fwrite(),fclose()功能一样
file_get_contents();//获取文件内容