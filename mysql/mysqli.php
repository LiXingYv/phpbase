<?php
/**
 * 面向过程
 * 我们用mysqli_connect()函数建立一个连接。然后选择数据库，然后发送sql指令，最后释放资源
 */
$link = mysqli_connect();
mysqli_select_db($link,'db');
$result = mysqli_query($link,'select * from user');//执行操作
$num_rows=mysqli_num_rows($result);
mysqli_close($link);

/**
 * 面向对象
 * new新建一个mysqli对象，传入数据库连接的相关参数就可以获得一个mysqli对象。可以通过$mysqli->connect_errno判断连接是否有误
 */
$mysqli = new mysqli('localhost','root','');//建立连接
$mysqli->select_db('mydb');//选择数据库
$mysqli->set_charset('utf8');//设置字符集
$mysqli_result=$mysqli->query('SELECT * FROM user');//执行操作
$result = $mysqli->fetch_all();
$mysqli_result->close();//释放结果集
$mysqli->close();//关闭连接

/**
 * 面向对象写法
 * 查询
 */
$result = $link->query('select * from user');//查询
$num_rows = $result->num_rows;//取得结果集中行的数目

/**
 * 面向对象写法
 * 新增
 */

/**
 * 面向对象写法
 * 更改
 */

/**
 * 面向对象写法
 * 删除
 */

/**
 * 面向对象写法
 * 结果集
 * 想要从结果集中取出数据，可以用$myqli_result->要求返回的形式
 */
//返回形式
fetch_assoc();//查询到的数据以关联数组的形式返回
fetch_row();//查询到的一条数据以索引数组的形式返回
fectch_array();//查询到的一条数据以索引数组和关联数组的混合形式返回