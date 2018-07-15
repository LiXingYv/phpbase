<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/7
 * Time: 21:14
 */
namespace a{
    //const SITE_NAME = 'PHP中文网a';
    define('SITE_NAME','PHP中文网');//define创建的常量，是不受命名空间限制的，是全局的；
}
namespace b{
    const SITE_NAME = 'PHP中文网b';
}
namespace {
    header("Content-type:text/html;charset=utf-8");//指定编码
    echo SITE_NAME;
    echo '<hr/>';
    echo \b\SITE_NAME;
}