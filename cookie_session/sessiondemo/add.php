<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/27 0027
 * Time: 上午 11:06
 */
header('Content-type:text/html;charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username'])){
        echo "<script>alert('用户名不能为空！');location.href='login.html';</script>";
    }else {
        $username = trim($_POST['username']);//移除用户名两侧的空格
    }
    if (empty($_POST['password'])){
        echo "<script>alert('密码不能为空！');location.href='login.html';</script>";
    }else{
        $password = $_POST['password'];
    }
    if (empty($_POST['repassword'])){
        echo "<script>alert('确认密码不能为空！');location.href='login.html';</script>";
    }else{
        $repassword = $_POST['repassword'];
    }
    if ($password != $repassword) {
        echo "<script>alert('两次输入密码不一致！');location.href='login.html';</script>";
    }
}
$mysqli = new mysqli('localhost', 'root', '', 'student');
$result = $mysqli->query("SELECT password FROM user WHERE username = "."'$username'");
$rs=$result->fetch_row();
if(!empty($rs)){
    echo "<script>alert('用户已存在！');location.href='login.html';</script>";
}else {
    $mysqli = new mysqli('localhost', 'root', '', 'student');
    $sql = "INSERT INTO user (username,password) VALUES ('$_POST[username]', '$_POST[password]')";
    $rs = $mysqli->query($sql);
    if (!$rs) {
        echo $rs;
        //echo "<script>alert('注册失败！');location.href='login.html';</script>";
    } else {
        echo "<script>alert('注册成功！返回登录页面');location.href='login.html';</script>";
    }
}