<?php
$dir = isset( $_GET['dir'] ) ? $_GET['dir'] : '.';

$dh = opendir($dir);

/*
改进1: 对于普通文件,直接打开看内容 is_dir is_file
改进2: 防范地址栏恶意的打../../..查看上级甚至磁盘的内容 realpath
改进3: 能否加个表单,通过[mp3][提交],即可创建mp3目录 is_dir, mkdir
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>文件管理系统</h1>
        <table border="1">
            <tr>
                <td>名称</td>
                <td>操作</td>
            </tr>
            <?php
            while( ( $row = readdir($dh) ) !== false ) {
                echo '<tr>';
                echo '<td>' , $row , '</td>';
                echo '<td><a href="1.php?dir=',$dir, '/' , $row,'">查看</a></td>';
                echo '</tr>';
            }

            closedir($dh);
            ?>
        </table>
    </div>
</body>
</html>