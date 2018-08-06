<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 10:45
 */
echo date("Y-m-d h:i:s w");
//配置文件中要修改时区 timezone='UTC',UTC代表国际通用时间，PRC代表中国时区

//时间戳:1970年1月1日开始算，unix时间戳，很多时候在系统中存时间是用时间戳形式
var_dump(time());
echo time();
echo '<br/>';
echo date("Y-m-d h:i:s w",1531537158);
echo '<br/>';
echo strtotime('2018-07-14 11:03:56');//时间转换为时间戳
echo '<br/>';
echo getdate();//返回某个时间戳或者当前本地的日期、时间的日期、时间信息
echo '<br/>';
echo microtime();//返回当前时间戳的微秒数
echo '<br/>';
echo mktime('20180714');//返回一个日期的时间戳

echo gmdate('Y-m-d 星期N H:i:s',0);//格林威治时间不考虑时区，H是24小时制，h是12小时制

checkdate();//检测日期是否合法



