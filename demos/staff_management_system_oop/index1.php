<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="layui/css/layui.css">
</head>
<body>
<?php if(isset($_SESSION['auth'])){ if($_SESSION['auth']==1){ ?>
    <a href="Action.php?action=0" class="layui-btn">退出</a>
    <a href="Action.php?action=2" class="layui-btn">添加</a>
<?php }else{ ?>
    <a href="login.php" class="layui-btn">登录</a>
<?php } }else{ ?>
    <a href="login.php" class="layui-btn">登录</a>
<?php } ?>

<table class="layui-table">
    <colgroup>
        <col>
        <col>
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>id</th>
        <th>名字</th>
        <th>年龄</th>
        <th>性别</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($res as $re){?>
        <tr>
            <td><?php echo $re[0]?></td>
            <td><?php echo $re[1]?></td>
            <td><?php echo $re[3]?></td>
            <td><?php echo $re[5]==0? '女':'男'?></td>
            <?php if(@$_SESSION['auth']){ ?>
<!--                已登录-->
            <td>
                <a href="Action.php?id=<?php echo $re[0]?>&action=1">查看</a>
                <a href="Action.php?id=<?php echo $re[0]?>&action=4">更新</a>
                <a href="Action.php?id=<?php echo $re[0]?>&action=3">删除</a>
            </td>
            <?php }else{ ?>
<!--                未登录-->
            <td><a href="Action.php?id=<?php echo $re[0]?>&action=1">查看</a></td>
            <?php } ?>



        </tr>
    <?php }?>

    </tbody>
</table>
<script src="layui/layui.js"></script>
</body>
</html>