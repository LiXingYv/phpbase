<!DOCTYPE html>
<html lang="en">
<?php
$path = './';
if(isset($_GET['dir'])){
    $path .= $_GET['dir'];
}
$dh = opendir($path);
if($dh === false){
    echo '打开出错';
    exit;
}
$list = array();
while(($file = readdir($dh)) !== false){
    $list[] = $file;
};
closedir($dh);
?>
<head>
    <meta charset="UTF-8">
    <title>文件管理</title>
    <style>
        td{
            border:1px solid gray;
        }
    </style>
</head>
<body>
    <h1>文件管理系统</h1>
    <table>
        <tr>
            <td>序号</td>
            <td>文件名</td>
            <td>操作</td>
        </tr>
        <?php foreach ($list as $k => $v){ ?>
            <tr>
                <td><?php echo $k ?></td>
                <td><?php echo $v ?></td>
                <?php if(is_dir($path.'./'.$v)){ ?>
                    <td><a href="file.php?dir=<?php echo $v?>">打开</a></td>
                <?php }else{ ?>
                    <td><a href="<?php echo $path.$v?>">下载</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>