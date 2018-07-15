<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/7
 * Time: 19:02
 */
include 'MyConnect.php';
include 'View.php';
header("Content-type:text/html;charset=utf-8");//指定编码
class Begin{
    function run(){
        $a = new MyConnect();
        $re = $a->my_query("select * from user");
        $r = $a->my_fetch_all();
//        var_dump($r);die;
        $v = new View();
        //赋值数据
        $v->assign('res',$r);
        //调用模板
        $v->display('index1.php');
    }
}
