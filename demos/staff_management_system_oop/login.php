<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/12
 * Time: 20:56
 */
include 'View.php';
include 'MyConnect.php';
$v=new View();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $password=$_POST['password'];
    $sql="select * from admin where name='".$name ."'and password='".md5($password)."'";
    $link=new MyConnect();
    $re=$link->my_query($sql);
    if($re->num_rows){
        $_SESSION['auth']=1;
        header('location:index.php');
    }else{
        header('location:login.php');
    };
}else{
    $v->display('is_login.php');
}


