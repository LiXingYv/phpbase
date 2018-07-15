<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 15:32
 */
//session_start();//想用session必须先开启，若果默认开启，需要在php.ini文件中设置session.auto_start = 1
$_SESSION['username']='lisi';//设置session
$_SESSION['pas']='1234';//设置session
unset($_SESSION['username']);//删除session值
session_destroy();//释放session
var_dump($_SESSION);