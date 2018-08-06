<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/30
 * Time: 19:53
 */
//计算1到100的和
function sum($n){
    if($n==1){
        return 1;
    }
    return $n + sum($n-1);
}
echo sum(100),'<br/>';

//递归的技巧:假设法
//用递归打印当前目录下的所有目录，及子目录
function printdir($path,$lev=1){
    $dh = opendir($path);

    while(($row = readdir($dh)) !== false){
        echo str_repeat('&nbsp;',$lev).$row,'<br/>';
        if('.'==$row  || '..'==$row)
        {
            continue;
        }
        if(is_dir($path.'/'.$row)){
            printdir($path.'/'.$row,$lev+1);
        }
    }
    closedir($dh);
}
$path = '.';
printdir($path);

//递归与静态变量
function t(){
    static $a = 10;
//    $a = 10;
    $a += 1;
    return $a;
}
echo t(),'<br/>';
echo t(),'<br/>';
echo t(),'<br/>';

//写递归函数计算所有单元的和
$arr = array(1,2,3,array(4,array(5,6)));
function sumArr($arr){
    static $sum = 0;
    foreach ($arr as $v){
        if(is_array($v)){
//            $sum += sumArr($v);
            sumArr($v);
        }else{
            $sum += $v;
        }
    }
    return $sum;
}
echo sumArr($arr);

//递归练习题
//一个多维数组，如果单元值为数字，则把其值修改为原来的2倍
//如array(1,2,'b',array(3,'c',array(4,5)))变成array(2,4,'b',array(6,'c',array(8,10)))
//在对POST,GET做递归安全转义时要用到

//递归创建级联目录
//如给定'./a/b/c/d/e',而./a都不存在，要能递归创建
//项目中经常按 年/月/日 这种格式来创建目录，并存放上传文件

//递归删除目录
//如给定'./a',则要把a目录及下级子目录，全删除
//后台管理系统中，会批量删除某个目录

//给定如下数组，完成无限极分类
array(
    array('id'=>1,'area'=>'北京','pid'=>0),
    array('id'=>2,'area'=>'河北','pid'=>0),
    array('id'=>3,'area'=>'保定','pid'=>2),
    array('id'=>4,'area'=>'易县','pid'=>2),
    array('id'=>5,'area'=>'海淀','pid'=>1)
);
//要求
/**
 * f(0)输出0号地区下的子孙地区
 * 北京
 *      海淀
 * 河北
 *      保定
 *          易县
 *
 * f(2)得到2号地区下的子孙地区
 * 河北
 *      保定
 *          易县
 */





















