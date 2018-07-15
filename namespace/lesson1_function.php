<?php
/**
 * 命名空间解决了函数的全局命名冲突问题
 * 如果代码使用了命名空间，那么所有代码必须写到命名空间中
 */
/**
 * 如果使用了命名空间那么所有的代码必须全部写在命名空间中
 * 如果命名空间没有名字那么就是全局命名空间即‘\’
 */
namespace a{
    function hello(){
        return '命名空间是：'.__NAMESPACE__.'<br/>函数名称是：'.__FUNCTION__;
    }
}
namespace b{
    function hello(){
        return \a\hello();//不同命名空间之间的函数调用，需要写完整的命名空间名称
//        return '命名空间是：'.__NAMESPACE__.'<br/>函数名称是：'.__FUNCTION__;
    }
}

namespace {
    header("Content-type:text/html;charset=utf-8");//指定编码
    echo a\hello();
    echo "<hr/>";//在全局空间中调用命名空间可以省略第一个'\'
    echo \b\hello();
}