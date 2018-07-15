<?php
//解析url
$id = isset($_GET['id'])?$_GET['id']:'';
switch($id){
case 1:
include 'public/nav.php';
include '/news.php';
break;
case 2:
include 'public/nav.php';
include '/about.php';
break;
default:
include 'public/nav.php';
break;
}
?>