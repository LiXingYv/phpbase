<?php
/**
 * 变量是没有命名空间概念的,访问不受命名空间限制
 */
namespace a{
    header("Content-type:text/html;charset=utf-8");//指定编码
    $title = 'PHPa';
    echo $title;
    echo '<hr/>';
}
namespace b{
    header("Content-type:text/html;charset=utf-8");//指定编码
    //访问另一个命名空间的变量前面是不允许添加命名空间的
    echo $title;
    echo '<hr/>';
}
namespace {
    echo $title;
}