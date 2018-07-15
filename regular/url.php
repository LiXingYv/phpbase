<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/15
 * Time: 12:30
 */
//http://www.baidu.com
//https://www.baidu.com
//www.baidu.com
//baidu.com
$pattern = '/(http|https)?(:\/\/)?(\w+.?)(\w+.?)(\w+.?)/';
$str = 'http://www.baidu.com';
if(preg_match($pattern,$str,$match)){
    echo '匹配成功';
    var_dump($match);
}else{
    echo '匹配失败';
}