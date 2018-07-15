<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 17:15
 */
$dst = imagecreatefromjpeg('timg.jpg');
$src = imagecreatefromjpeg('1.jpg');

imagecopyresampled($dst,$src,100,100,0,0,1000,1000,800,800);
header("content-type:image/jpeg");
imagejpeg($dst);
imagedestroy($dst);
imagedestroy($src);