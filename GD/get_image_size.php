<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 17:10
 */
$arr = getimagesize('timg.jpg');
var_dump($arr);
list($width,$height) = $arr;
echo $width,$height;