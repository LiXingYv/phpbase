<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/21
 * Time: 9:32
 */
$sql = 'update art set title=\'今天天气\',content=\'空气质量优\',pubtime=\'12345678\',author=\'lxy\',';
rtrim($sql,',');//去掉指定字符串
$str = ' wo ';
trim($str);//去掉两端空格
$str = "\n";//如果是单引号包住是无法解析换行的。
$str1 = "linux,php,mysql";
explode(',',$str1);//以delimiter分割字符串为数组
$ext = strrchr($_FILES['pic']['name'],'.');//获取文件后缀名

//addslashes();//对数据库sql的字符串，把需要转义的字符都加上反斜线进行转义
//htmlspecialchars();//对html相关的字符串进行转义
//str_replace(0);//替换字符串

//heredoc nowdoc 定义大段文本
$str3 = <<<HTML
hello 
world   abdc
ok now
HTML;
echo $str3;
$str4 = <<<'INTRO'
远看山有色，
近听水无声
INTRO;
echo $str4;
/**
 * 单双引号的区别
 * 对比、转义、变量解析、速度
 */
$str5='\'\\ \n \t \$';//转义
echo $str5;
$str6 = "\" \\ \n \t \$ ";//双引号转义的东西比较多
echo $str6;
//双引号里的变量是可以解析的
//单引号不需要分析串内有没有变量，需要转义的内容也少，速度比双引号要快，我们优先使用单引号。

/**
 * 字符串常用函数分类
 * 字符长度函数
 * 查找字符位置函数
 * 字符串替换函数
 * 提取子字符函数（双字节）
 * 分割，连接，反转函数
 * 去除、增加空格函数
 * HTML代码、数据库安全处理有关函数
 * 比较字符函数
 * 字符大小写转换函数
 */






