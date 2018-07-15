<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * 1.分割：array_chunck($arr,$num,[true]):true保持原索引
 * 2.合并：array_merge($arr1,$arr2);同名键自动覆盖
 * 3.巡航：key（）当前键名current()当前值，reset($arr)指针复位到第一个，next($arr)下移，prev($arr)前一个，end（$arr）尾部
 * 4.统计：count（$arr）返回数组中的元素个数，整数
 * 5.遍历：each($arr)返回当前元素的索引与关联表示，将自动下移指针
 * 6.转换：list（$v1,$v2...） = $arr;将数组元素索引部分按顺序转为变量
 * 掌握：用each和list配合完成数组遍历，以后我们还要学到数组专用遍历语句：foreach
 */
echo '<h3>常用的数组函数2</h3>';
$books = ['name'=>'PHP经典实例','price'=>59,'author'=>'Peter Zhu'];
print_r($books);
echo '<hr/>';
echo in_array(59,$books)?'存在':'不存在';
echo '<hr/>';


?>
</body>
</html>
