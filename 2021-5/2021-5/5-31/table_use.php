<?php
 $link=mysqli_connect('127.0.0.1','root','root','php2102');
 $sql="select * from login_history";
 $query=mysqli_query($link,$sql);
 $row=mysqli_fetch_all($query,1);
 echo "<pre>";print_r($row);echo "</pre>";


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h1>登录记录表</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>用户id</td>
            <td>用户登录时间</td>
            <td>登录的ip</td>
            <td>浏览器User-Agent</td>
        </tr>
        <?php foreach($row as $k => $v){ ?>
        <tr>
            <td><?php echo $v['id']?></td>
            <td><?php echo $v['uid']?></td>
            <td><?php echo $v['login_time']?></td>
            <td><?php echo $v['login_ip']?></td>
            <td><?php echo $v['ua']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>