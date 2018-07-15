<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 16:16
 */
//创建画布
$image = imagecreatetruecolor(600,600);
//创建颜色
$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);
//用gd库画
imageline($image,0,0,600,600,$red);
imagefilledrectangle($image,10,10,40,40,$green);
imageellipse($image,40,40,80,80,$blue);
//告诉浏览器mime类型
header("Content-type:image/png");
//输出到浏览器或存放本地
imagepng($image);
//销毁资源
imagedestroy($image);