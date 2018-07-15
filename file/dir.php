<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 20:57
 */
//mkdir('test');//创建一层
//mkdir('test/a/b/c',0777,true);//递归创建
//rmdir(test1);//删除一层文件夹

/*$dir=opendir('test');
echo readdir($dir).'<br/>';
echo readdir($dir).'<br/>';
echo readdir($dir).'<br/>';
closedir($dir);*/

//unlink('a.txt');//删除文件

copy('b.txt','a.txt');//拷贝文件
rename('b.txt','bb.txt');//重命名