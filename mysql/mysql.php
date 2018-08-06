<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * mysql数据库操作入门，mysqli面向过程
 */

//配置连接参数
$host = "localhost";//主机名
$dbName = "myblog";//数据库名
$userName = "root";//用户名
$password = '';//密码

//连接数据库
$conn = mysqli_connect($host,$userName,$password,$dbName);//连接并返回
mysqli_query($conn, "set names utf8");//设置编码方式
/*if(mysqli_connect_errno()){
    die('连接失败'.mysqli_connect_error());
}else{
    echo '<h3>连接成功</h3>';
}*/

//1.查询SELECT
$sql = 'SELECT id,name,course,grade FROM student WHERE grade>60';

$result = mysqli_query($conn,$sql);
//如果结果集存在，并且不能为空
if($result && mysqli_num_rows($result)>0){
//    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
//    $row = mysqli_fetch_array($result,MYSQLI_NUM);
//    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $row = mysqli_fetch_row($result);
//    $row = mysqli_fetch_assoc($result);
//    echo '<pre>';
//    print_r($row);
//    $row = mysqli_fetch_assoc($result);
//    echo '<pre>';
//    print_r($row);
    echo '<h2 align="center">成绩合格学生信息表</h2>';
    echo '<table border="1" cellpadding="5" cellspacing="0" align="center" width="50%">';
    echo '<tr bgcolor="#5f9ea0" align="center"><td>ID</td><td>姓名</td><td>课程</td><td>成绩</td></tr>';
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr align="center">';
        echo '<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['course'].'</td><td>'.$row['grade'].'</td>';
        echo "</tr>";
    }
    echo '</table>';
    echo '<h3 align="center">共有'.mysqli_num_rows($result).'个学生</h3>';
}else{
    echo '<h2>没有任何数据返回</h2>';
}


//新增操作
$sql = "INSERT student (name,course,grade) VALUES ('欧阳锋','php',88)";
//执行
/*if(mysqli_query($conn,$sql)){
    echo '成功的添加了'.mysqli_affected_rows($conn).'条记录，新增主键ID是：'.mysqli_insert_id($conn);
}else{
    echo '新增失败'.mysqli_error($conn);//数据库错误
};*/

//更新
$sql = "UPDATE student SET name='张无忌',course='mysql' WHERE id=9";
//执行
if(mysqli_query($conn,$sql)){
    echo '成功的更新了'.mysqli_affected_rows($conn).'条记录';
}else{
    echo '更新失败'.mysqli_error($conn);
};

//删除
$sql = "DELETE FROM student WHERE id=9";
//执行
if(mysqli_query($conn,$sql)){
    echo '成功的删除了'.mysqli_affected_rows($conn).'条记录';
}else{
    echo '删除失败'.mysqli_error($conn);
};