<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/20
 * Time: 22:30
 */
//查询
$sql = "select * from user";//查询全部
$sql = "select * from cat where cat_id=$cat_id";//查询部分
$sql = "select * from cat where cat_id='$cat_id'";//查询部分
$sql = "select * from cat where cat_id='".$cat_id."'";//查询部分
$sql = 'SELECT id,name,course,grade FROM student WHERE grade>60';//查询部分
$sql = "select art_id,art.cat_id,title,pubtime,comm,catname from art left join cat on art.cat_id=cat.cat_id";//两表联查
$sql = "select count(*) from art";//查询总数
$sql = "select art_id,title,content,pubtime,comm,catname from art join cat on art.cat_id=cat.cat_id where 1 ".$where." order by art_id desc limit 4,4";//分页查询
$sql = "select * from user where name='$user[name]' and password='$user[password]'";//用户名密码登录查询

//新增
$sql = "INSERT student (name,course,grade) VALUES ('欧阳锋','php',88)";
$sql = "insert into tag (art_id,tag) values (5,'linux'),(5,'mysql'),(5,'php')";//插入多行


//更新
$sql = "UPDATE student SET name='张无忌',course='mysql' WHERE id=9";
$sql = "update cat set num=num+1 where cat_id=".$art['cat_id'];//数字更新

//删除
$sql = "DELETE FROM student WHERE id=9";

//mysql入门语句
//mysql -h host -u root -p xxx//连接数据库
//show databases;//查看所有库
//use test;//选库
//show tables;//查看库下面的表
//create table msg(id init auto_increment primary key,content varchar(200),pubtime int) charset utf8;//建表
//insert into msg (id,content,pubtime) values(1,'逗你玩',13254345);//插入数据
//select * from msg;//查询数据
//truncate msg;//快速清空表
//set names utf8/gbk;//告诉服务器你的字符集
