<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 22:40
 */
//php.ini设置最大文件体积upload_max_filesize = 2M
var_dump($_FILES['file']);
//判断是否有错误号
if($_FILES['file']['error']){
    switch ($_FILES['file']['error']){
        case 1:
            $str = '上传的文件超过了php.ini中upload_max_filesize选项限制的值';
            break;
        case 2:
            $str = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
            break;
        case 3:
            $str = '文件只有部分被上传';//一般不会出现
            break;
        case 4:
            $str = '没有文件被上传';
            break;
        case 6:
            $str = '找不到临时文件夹。PHP 4.enterprise_simple.10 和 PHP 5.0.enterprise_simple 引进';
            break;
        case 7:
            $str = '文件写入失败。PHP 5.1.0 引进';
            break;
    }
    echo $str;
    exit;
}
//判断你准许的文件大小
if($_FILES['file']['size'] > (pow(1024,2)*2)){
    exit('文件大小超过了准许的大小');
}
//判断你准许的mime类型，文件后缀
$allowMime = ['image/png','image/jpeg','image/gif','image/wbmp'];
$allowFix = ['png','jpeg','jpg','gif','wbmp'];
$info = pathinfo($_FILES['file']['name']);
$subFix = $info['extension'];
echo $subFix;
if(!in_array($subFix,$allowFix)){
    exit('不准许的文件后缀');
}
if(!in_array($_FILES['file']['type'],$allowMime)){
    exit('不准许的mime类型');
}
//拼接上传路径
$path='upload/';
if(!file_exists($path)){
    mkdir($path);
}
//文件名随机
$name = uniqid().'.'.$subFix;
//判断是否是上传文件
if(is_uploaded_file($_FILES['file']['tmp_name'])){
    if(move_uploaded_file($_FILES['file']['tmp_name'],$path.$name)){//是否是可移动的文件
        echo '上传成功';
    }else{
        echo '文件移动失败';
    }
}else{
    echo '不是上传文件';
}