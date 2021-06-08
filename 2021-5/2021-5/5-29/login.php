<?php
    if($_POST){
        //处理变量
        $username = trim($_POST['uname']);
        $password = trim($_POST['password']);
        // 连接数据库
        $host = '127.0.0.1';
        $users = 'root';
        $pass = 'root';
        $db = 'php2102';
        $link = new mysqli($host,$users,$pass,$db);
        
        // $link = new mysqli('127.0.0.1','root','root','php2102');
        
        
        //sql语句
        $sql = "select * from users where username='{$username}' or mobile='{$username}' or email='{$username}'";
        //准备阶段
        $stmt = mysqli_query($link,$sql);
        //执行
        $result = mysqli_fetch_all($stmt);
        
        if(empty($result)){
            echo "查无此人";
            header("refresh:1;url=login.php");
        }

        foreach($result as $k=>$v){
            $p=password_verify($password,$v[4]);
            //验证密码
            if($p){
                //记录登录信息
                $uid = $v[0];  //用户id
                $login_time = time()+60*60*8;      //登陆时间
                $login_ip = $_SERVER['REMOTE_ADDR']; //用户登录IP
                $UA = $_SERVER['HTTP_USER_AGENT'];   //浏览器信息

                $sql = "insert into login_history (`uid`,`login_time`,`login_ip`,`ua`)
                values ('{$uid}','{$login_time}','{$login_ip}','{$UA}')";
                $stmt = mysqli_prepare($link,$sql);
                mysqli_stmt_execute($stmt);

                echo "登录成功";
                session_start();
                $_SESSION['username']=$v['1'];
                header("refresh:1;url=table.php");
            }else{
                echo "密码错误";echo '<br>';
                header("refresh:1;url=login.php");
            }
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
    <form action="login.php" method="post">
        <input type="text" name="uname" placeholder="用户名/email/手机号"><br>
        <input type="password" name="password" placeholder="密码"><br>
        <input type="submit" value="登录">
    </form>
</body>
</html>