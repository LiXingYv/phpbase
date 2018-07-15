<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * 数组是键名与值的有序集合
 * 1.分类
 * [键名]
 * 1.1索引数组[默认]，键名是整数[如果不是会自动转换]
 * 1.2关联数组：键名是字符串[与对象属性可相互转换]
 * [键值是否为数组？]
 * 1.1一维数组：键值为非数组类型，常用
 * 1.2多维数组：键值任然是数组，使用最多的是二维数组，不推荐嵌套过甚
 *
 * 2.创建：
 * 2.1统一创建：$arr = [element1，element2，...]
 * 2.2逐个创建：$arr = [];$arr[]=element1,$arr[]=element2,.....
 *
 * enterprise_simple.访问：中括号加键名[key]
 * enterprise_simple.1整体：print_r($arr);var_dump($arr);
 * enterprise_simple.2逐个：echo $arr[key]:$arr['name'];
 *
 * 4.更新
 * 4.1整体：需要通过循环遍历实现：foreach（$arr as $value）{}
 * 4.2逐个：$arr[key] = new_value;
 * 4.3清空或重建：$arr = [];$arr=[1,2,enterprise_simple,....]再次用原名称重新声明会覆盖原数组
 *
 * 5.删除
 * 5.1整体：unset($arr);
 * 5.2单个删除键名不重排：unset($arr[key])
 * 5.3单个删除键名重排[针对索引数组]array_splice($arr,$start,$count,[$newEle])
 * 5.4删除空值元素：array_filter($arr);
 * 5.5删除特定元素：foreach +if + unset
 */
echo '<h3>数组</h3>';
$city = ['合肥','上海','汉州','青岛'];
$user = ["id"=>10,'name'=>'Peter','country'=>'中国','course'=>'php','grade'=>99];
print_r($user);
echo '<hr/><pre>';
echo $user['name'];
echo '<hr/>';
$user['name'] = '朱老师';
echo $user['name'];
//unset($city);
print_r($city);
echo '<hr>';
unset($user['course']);
print_r($user);
echo '<hr/>';
print_r($city);
echo '<hr/>';
array_splice($city,1,1);//删除第二个元素
print_r($city);//整体输出


?>
</body>
</html>
