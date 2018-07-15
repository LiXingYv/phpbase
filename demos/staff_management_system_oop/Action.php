<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/11
 * Time: 22:54
 */
include 'MyConnect.php';
include 'View.php';
@$id = $_GET['id'];
//各种操作符号
//0退出
//1查看
//2添加
//3删除
//4更新
$action=$_GET['action'];
$link = new MyConnect();
$v= new View();
if($action==0){
    unset($_SESSION['auth']);
    header("Location:index.php");
}
if($action==1){
    $sql="select * from user where id=".$id;
    $link->my_query($sql);
    $r = $link->my_fetch_assoc();
    //var_dump($r);

    $v->assign('res',$r);
    $v->display("detail.php");
}
if($action==2){
    //echo $action;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $age=$_POST['age'];
        $asign=$_POST['asign'];
        $sex=$_POST['sex'];
        //var_dump($_POST);
        $sql="insert into user (name,address,age,asign,sex) VALUE ('"."$name"."','"."$address"."','"."$age"."','"."$asign"."',".$sex.")";
        $r=$link->my_query($sql);
        header("Location:index.php");
    }else{
        $v->display("add.php");
    }

}
if($action==3){
    $sql="delete from user where id=".$id;
    $link->my_query($sql);
    header("location:index.php");
}

if($action==4){

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $age=$_POST['age'];
        $asign=$_POST['asign'];
        $sex=$_POST['sex'];
        $id=$_POST['id'];
        //var_dump($_POST);
        $sql="update user set name='"."$name"."',address='"."$address"."',age='"."$age"."',asign='"."$asign"."',sex=".$sex." where id=".$id;
        $r=$link->my_query($sql);
//        echo $sql;
        header("Location:index.php");
    }else{
        $sql="select * from user where id=".$id;
        $link->my_query($sql);
        $r = $link->my_fetch_assoc();
        //var_dump($r);

        $v->assign('res',$r);
        $v->display('update.php');
    }
}

