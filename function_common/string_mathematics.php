<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 11:17
 */
//随机数
$num = rand(1,6);
$num1 = mt_rand(0,5);
echo $num;
echo $num1;
/**
 * 小数
 * floor:不大于该数的最大整数
 * ceil：不小于该数的最小整数
 * round：四舍五入法取整
 */

/**
 * 其他
 * abs：绝对值
 * pi：圆周率
 * M_PI:常数，与破pi()函数的返回值相同
 * pow：指数表达式
 * max：最大值
 * min：最小值
 */
$arr=[23,34,5];
echo max($arr);
/**
 * 字符串函数
 */
/**
 * 大小写转换
 * strtolower：转换为小写
 * strtoupper:转换为大写
 * lcfirst：首字母小写
 * ucfirs：首字母大写
 * ucwords：每个单词首字母大写
 */

/**
 * 空白处理
 * trim:去掉首尾的空白字符
 * ltrim:去掉开头的空白字符
 * rtrim:去掉结尾的空白字符
 */

/**
 * 查找定位
 * strstr/strchr:返回首次出现到结尾的内容
 * strrchr:返回最后一次出现到结尾的内容
 * stristr：strstr忽略大小写的版本
 * strpos:返回首次出现的位置
 * stripos:strpos忽略大小写的版本
 * strrpos:返回最后一次出现的位置
 * strripos:strrpos忽略大小写的版本
 * substr:子串提取，可以通过下标方式获取单个字符（$str[n]）
 * strpbrk:返回（字符列表中任意字符）首次出现到结尾的内容
 */

/**
 * 比较
 * strcmp:二进制比较字符串
 * strcasecmp：strcmp忽略大小写
 * strnatcmp：自然顺序比较
 * strnatcasecmp：strnatcmp忽略大小写版本
 */

/**
 * 顺序
 * str_shuffle:打乱顺序（舒服了）
 * strrev：逆序字符串
 */

/**
 * 转换
 * chr：将ASCII码值转换为字符
 *
 */
