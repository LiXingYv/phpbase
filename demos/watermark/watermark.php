<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 18:37
 */
function water($source,$water='icon.jpg',$position=8,$alpha=100,$type="jpeg",$path='test',$isRandName = true){
    //打开图片
    $sourceRes = open($source);
    //var_dump($sourceRes);
    $waterRes = open($water);

    //获取图片大小算出位置
    $sourceInfo = getimagesize($source);
    $waterInfo = getimagesize($water);

    //算位置
    switch($position){
        case 1:
            $x=0;
            $y=0;
            break;
        case 2:
            $x= ($sourceInfo[0]-$waterInfo[0])/2;
            $y=0;
            break;
        case 3:
            $x=$sourceInfo[0]-$waterInfo[0];
            $y=0;
            break;
        case 4:
            $x=0;
            $y=($sourceInfo[1]-$waterInfo[1])/2;
            break;
        case 5:
            $x= ($sourceInfo[0]-$waterInfo[0])/2;
            $y=($sourceInfo[1]-$waterInfo[1])/2;
            break;
        case 6:
            $x=$sourceInfo[0]-$waterInfo[0];
            $y=($sourceInfo[1]-$waterInfo[1])/2;
            break;
        case 7:
            $x=0;
            $y=$sourceInfo[1]-$waterInfo[1];
            break;
        case 8:
            $x= ($sourceInfo[0]-$waterInfo[0])/2;
            $y=$sourceInfo[1]-$waterInfo[1];
            break;
        case 9:
            $x=$sourceInfo[0]-$waterInfo[0];
            $y=$sourceInfo[1]-$waterInfo[1];
            break;
        default:
            $x=mt_rand(0,$sourceInfo[0]-$waterInfo[0]);
            $y=mt_rand(0,$sourceInfo[1]-$waterInfo[1]);
            break;
    }
    //把xy求出的值供合并使用
    imagecopymerge($sourceRes,$waterRes,$x,$y,0,0,$waterInfo[0],$waterInfo[1],$alpha);
    $func = 'image'.$type;/*组成imagejpeg();imagepng();imagewbmp();中的任意一个函数*/
    //处理路径问题是否启用随机文件名
    if($isRandName){
        $name = uniqid().'.'.$type;
    }else{
        $pathinfo = pathinfo($source);
        $name = $pathinfo['filename'].'.'.$type;
    }

    $path = rtrim($path,'/').'/'.$name;//生成存储路径
    $func($sourceRes,$path);//存储图片
    imagedestroy($sourceRes);
    imagedestroy($waterRes);
//    var_dump($func);
}

//打开文件
function open($path){
    //判断是否存在
    if(!file_exists($path)){
        exit('文件不存在');
    }
    $info = getimagesize($path);
//    var_dump($info);
    switch ($info['mime']){
        case 'image/jpeg':
        case 'image/jpg':
        case 'image/pjpeg':
            $res = imagecreatefromjpeg($path);
            break;
        case 'image/png':
            $res = imagecreatefrompng($path);
            break;
        case 'image/gif':
            $res = imagecreatefromgif($path);
            break;
        case 'imag/wbmp':
        case "image/bmp":
            $res = imagecreatefromwbmp($path);
            break;
    }
    return $res;

}
water('timg.jpg');