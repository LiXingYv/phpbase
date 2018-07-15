<?php
/**
 * 替代语法
 */
$arr = [1,2,3,4,5];
?>
<?php foreach($arr as $val) :?>
    //循环
    //phpstorm写法ul>li{aaaaaa$$}*10>a
    <ul>
        <li>aaaaaaa01<a href=""></a></li>
        <li>aaaaaaa02<a href=""></a></li>
        <li>aaaaaaa03<a href=""></a></li>
        <li>aaaaaaa04<a href=""></a></li>
        <li>aaaaaaa05<a href=""></a></li>
        <li>aaaaaaa06<a href=""></a></li>
        <li>aaaaaaa07<a href=""></a></li>
        <li>aaaaaaa08<a href=""></a></li>
        <li>aaaaaaa09<a href=""></a></li>
        <li>aaaaaaa10<a href=""></a></li>
    </ul>
<?php endforeach;?>

<?php if(true) :?>
    <ul>
        <li><a href=""></a></li>
    </ul>
<?php endif;?>
