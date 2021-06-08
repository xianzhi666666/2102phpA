<?php
 include "piont.php";
 $link=mysqli_connect('127.0.0.1','root','root','php2102');
 $sql="select * from users";
 $query=mysqli_query($link,$sql);
 $row=mysqli_fetch_all($query,1);
//  echo '<pre>';print_r($row);echo '</pre>';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h3>欢迎 <?php  echo $_SESSION['username']; ?> 登录</h3>
    <a href="quit.php">退出登录</a>
    <a href="table_use.php">登录记录表</a>
    <h1>用户列表</h1>
    <table border="1">
        <tr>
            <td>用户id</td>
            <td>名称</td>
            <td>email</td>
            <td>手机号</td>
            <td>密码</td>
            <td>月薪</td>
            <td>地址</td>
            <td>操作</td>
        </tr>
        <?php foreach($row as $k => $v) { ?>
        <tr>
            <td><?php echo $v['userid']?></td>
            <td><?php echo $v['username']?></td>
            <td><?php echo $v['email']?></td>
            <td><?php echo $v['mobile']?></td>
            <td><?php echo $v['password']?></td>
            <td><?php echo $v['account']?></td>
            <td><?php echo $v['address']?></td>
            <td><a href="delate.php?userid=<?php echo $v['userid'];?>">删除</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>