<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 17:35
 */
//宽 高 字母 数字 字母数字混合 干扰线 干扰点 背景色 字体颜色

function verify($width = 100, $height=40,$num=5,$type=3){
    $image = imagecreatetruecolor($width,$height);//新建画布
    imagefilledrectangle($image,0,0,$width,$height,lightColor($image));//填充背景色
    switch ($type){
        case 1:
            $str= '0123456789';
            $string = substr(str_shuffle($str),0,$num);
            break;
        case 2:
            $arr= range('a','z');
            shuffle($arr);
            $tmp = array_slice($arr,0,$num);
            $string = join('',$tmp);
            break;
        case 3:
            $str= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = substr(str_shuffle($str),0,$num);
            break;
    }

    for($i=0;$i<$num;$i++){//写字
        $x = floor($width/$num)*$i;
        $y = mt_rand(10,$height-20);
        imagechar($image,5,$x,$y,$string[$i],deepColor($image));
    }

    for($i=0;$i<$num;$i++){//干扰线
        imagearc($image,mt_rand(10,$width),mt_rand(10,$height),mt_rand(10,$width),mt_rand(10,$height),mt_rand(0,10),mt_rand(0,270),deepColor($image));
    }

    for($i=0;$i<50;$i++){//干扰点
        imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),deepColor($image));
    }

    header("content-type:image/png");//指定类型

    imagepng($image);//输出
    imagedestroy($image);//销毁
    return $string;
}
verify();
//浅色
function lightColor($image){
    return imagecolorallocate($image,mt_rand(130,255),mt_rand(130,255),mt_rand(130,255));
}
//深色
function deepColor($image){
    return imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
}