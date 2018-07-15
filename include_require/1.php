<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 14:54
 */
//include '2.php';//include("2.php");
require '2.php';//require("2.php");
add();

/**
 * include当文件不存在时可以执行后续代码，而require后续代码不可以执行
 */

//require_once ();
//include_once ();

/**
 * include和require不能重复包含而include_once和require_once可以
 */