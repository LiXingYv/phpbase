<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/22
 * Time: 15:47
 */
$big = imagecreatefromjpeg('./testsimple.jpg');
list($w,$h)=getimagesize('./testsimple.jpg');

$small = imagecreatetruecolor($w/2,$h/2);
imagecopyresampled ( $small , $big,0, 0 , 0, 0 , $w/2 , $h/2,$w,$h);
imagepng($small,'./t6.png');
imagedestroy($big);
imagedestroy($small);


/**
 * 生成缩略图
 * @param $oimg str原图
 * @param $sw int 最终生成缩略图的宽
 * @param $sh int 生成缩略图的高
 * @return str 生成缩略图的路径
 */
function makeThumb($oimg,$sw=200,$sh=200){
    //缩略图存放的路径的名称
    $simg = dirname($oimg).'/'.randStr().'.png';
    //获取大图和缩略图的绝对路径
    $opath = ROOT.$oimg;//原图的绝对路径
    $spath = ROOT.$simg;//最终生成的小图
    //创建小画布
    $spic = imagecreatetruecolor($sw,$sh);

    //创建白色
    $white = imagecolorallocate($spic,255,255,255);
    imagefill($spic,0,0,$white);

    //获取大图信息
    list($bw,$bh,$btype) = getimagesize($opath);
    $map = array(
        1=>'imagecreatefromgif',
        2=>'imagecreatefromjpeg',
        3=>'imagecreatefrompng',
        15=>'imagecreatefromwbmp'
    );
    if(!isset($map[$btype])){
        return false;
    }

    $opic = $map[$btype]($opath);//大图资源

    //计算缩略比
    $rate = min($sw/$bw,$sh/$bh);
    $zw = ceil($bw * $rate);//最终返回的缩略小图宽
    $zh = ceil($bh * $rate);//最终返回的缩略小图高


    imagecopyresampled($spic,$opic,ceil(($sw-$zw)/2),ceil(($sh-$zh)/2),0,0,$zw,$zh,$bw,$bh);

    $put = array(
        1=>'imagegif',
        2=>'imagejpeg',
        3=>'imagepng',
        15=>'imagewbmp'
    );
    $put[$btype]($spic,$spath);
    imagedestroy($spic);
    imagedestroy($opic);

    return $simg;
}
