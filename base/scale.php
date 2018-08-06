<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/28
 * Time: 22:20
 */
//二进制中
/*255 1111 1111
-1 1111 1111
像上面这样8个1，到底理解成255，还是-1，取决于程序
比如在mysql中，int，unsigned int,理解为255*/

//php中所有的错误号都是2的n次方，用2进制的数表示的
//设置报告所有的错误
error_reporting(E_ALL);
//error_reporting(0);//屏蔽所有错误

//想报所有错误，除了notice
//error_reporting(E_ALL ^ E_NOTICE);//抑或
echo E_NOTICE;
echo $a;
