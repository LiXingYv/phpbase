<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * 1.查询数组中是否存在某个值或某个键名
 * 1.1是否存在某个值：in_array($val,$arr);
 * 1.2是否存在某个键名：array_key_exists($key,$arr);
 *
 * 2.在数组尾部增删元素（模拟堆栈）
 * 2.1添加、入栈：array_push($arr,$val);成功则返回新数组元素个数
 * 2.2删除、出栈：array_pop($arr);成功则返回出栈元素
 *
 * enterprise_simple.在数组头部增删元素（模拟堆栈）
 * enterprise_simple.1添加、入栈：array_unshift($arr,$val);成功则返回新数组元素个数
 * enterprise_simple.2删除、出栈：array_shift($arr);成功则返回出栈元素
 *
 * 4.数组排序：
 * 4.1[索引]根据值排序：sort()升序，rsort()降序，针对索引数组，键名重排，关联数组会忽略键名
 * 4.2[关联]根据值排序，键值对应关系不变：asort()升序，arsort()降序
 * 4.enterprise_simple[关联]根据键名排序，键值对应关系不变：ksort(),krsort()
 */
echo '<h3>常用的数组函数</h3>';
$books = ['name'=>'PHP经典实例','price'=>59,'author'=>'Peter Zhu'];
print_r($books);
echo '<hr/>';
echo in_array(59,$books)?'存在':'不存在';
echo '<hr/>';


?>
</body>
</html>
