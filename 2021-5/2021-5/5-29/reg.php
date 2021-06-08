<?php
    if($_POST){
        // 连接数据库
        $host = '127.0.0.1';
        $user = 'root';
        $pass = 'root';
        $db = 'php2102';
        $link = new mysqli($host,$user,$pass,$db);
        mysqli_query($link,"set names utf8");
        //处理变量
        $username = trim($_POST['uname']);
        $mobile = trim($_POST['mobile']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $account = trim($_POST['account']);
        $address = trim($_POST['address']);
        //sql语句
        $password=password_hash($password,PASSWORD_DEFAULT);
        $sql = "insert into users (`username`,`email`,`mobile`,`password`,`account`,`address`)
        values ('{$username}','{$email}','{$mobile}','{$password}','{$account}','{$address}')";
        // echo $sql;die;
        //准备阶段
        $stmt = mysqli_prepare($link,$sql);
        //执行
        $result = mysqli_stmt_execute($stmt);
        if($result){
            echo '注册成功';
            header("refresh:2;url=login.html");
        }else{
            echo '注册失败';
        }
        die;
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method="POST">
        <input type="text" name="uname" placeholder="用户名"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="mobile" placeholder="手机号"><br>
        <input type="password" name="password" placeholder="密码"><br>
        <input type="text" name="account" placeholder="余额"><br>
        <input type="text" name="address" placeholder="地址"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>