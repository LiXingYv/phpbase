<?php
/**
 * 将命名空间进行分级管理，可以使不同空间的代码之间的逻辑关系更加的清晰
 * 将有一定层级关系的命名空间的标识符之间用反斜杠进行分割\
 */
namespace father{
    const SITE_NAME = 'php';
}
namespace father\sub{
    const DOMAIN = 'www.php.cn';
}
namespace {
    header("Content-type:text/html;charset=utf-8");//指定编码
    echo father\SITE_NAME.'的域名是：'.father\sub\DOMAIN;
}