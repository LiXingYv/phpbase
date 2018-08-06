<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 14:10
 */
/**
 * 数组中元素指针的移动
 * next：向后移动，指向下一个元素
 * prev：向前移动，指向前一个元素
 * end：指向最后一个元素
 * reset：复位，重新指向第一个元素
 * current：取当前数组指针指向的值
 * each：
 */

/**
 * 遍历
 * foreach（）{}/foreach(): endforeach;
 */

/**
 * 键和值相关的操作
 * key：获取数组当前元素的键
 * current/pos：获取数组当前元素的值
 * array_keys:获取所有的键
 * array_values:获取所有的值，并为其建立数字索引
 * array_key_exists/key_exists:判断给定的键是否在数组中
 * in_array:判断给定的值是否在数组中
 * array_search:根据值返回对应的键名
 * array_count_values:统计数组中所有的值出现的次数
 */

/**
 * 添加删除元素
 * array_shift:将数组开头的元素移出数组
 * array_unshift:向数组开头添加一个或更多个元素
 * array_push:向数组末尾压入一个或多个元素
 * array_pop:弹出数组末尾的一个元素
 */

/**
 * 排序相关
 * shuffle：数组打乱（转换为索引数组）
 * sort：对数组进行排序（排序之后重新索引）
 * rsort：对数组进行逆向排序
 * asort：对数组进行排序并保持索引关系
 * arsort：对数组进行逆向排序并保持索引关系
 * natsort:用自然顺序算法对数组进行排序
 * natcasesort:natsort忽略大小写的版本
 * ksort:对数组按照键名进行排序
 * krsort：对数组按照键名逆向排序
 * usort：使用用户自定义的比较函数对数组的值进行排序
 * uksort：使用自定义的比较函数对数组的键名进行排序
 */

/**
 * 元素运算
 * array_sum:计算数组中所有元素的和
 * array_product:计算数组中所有值的乘积
 * count/sizeof:计算数组中元素的个数
 */

/**
 * 创建数组
 * range：建立一个包含指定范围单元的数组（可以指定步幅，可以指定递减）
 * compact:创建一个包含变量与其值的数组
 * extract：从数组中将变量导入当前的符号表（与compact功能相反）
 * array：新建一个数组
 * array_merge:合并一个或多个数组（关联会覆盖，索引会重新索引，若想保留索引可以使用‘+’）
 * array_merge_recursive:递归合并一个或多个数组
 * array_combine:用一个数组的值作为键名，另一个数组的值作为值创建数组
 */

/**
 * 其他
 * array_chunk:将数组分割成指定长度的小数组
 * array_map:将回调函数作用到每个元素上，返回处理的结果数组（新数组）
 * array_walk:将回调函数作用到每个元素上（会改变原数组），返回真假
 * array_filter:使用回调函数过滤数组（回调函数返回真的才会出现在结果中）
 * array_flip:返回交换键和值后的新数组
 * array_rand:随机从数组中抽取一个或多个元素的键
 * array_replace:使用后面的数组中元素替换第一个数组中的元素
 * array_reverse:返回一个单元顺序相反的数组（关联数组会保持键值对应，索引数组需要传递第二个参数）
 * array_unique:移除数组中重复的值
 * implode 将一个数组的值连接为一个字符串
 */

/**
 * 数组键的规则
 * 如果不声明键，会从0,1,2,。。。递增生成键
 * 如果已经存在某1个或几个数字键，则从最大的数字键，递增生成数字键
 * 如果声明了重复键，后面的值覆盖前面的值
 * 键可以是整数也可以是字符串
 * 浮点数转成整数，如果字符串的内容恰好是整数，也理解为整数
 */