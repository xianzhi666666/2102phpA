<?php
if($_POST){
    //连接数据库
    include "connect.php";
    //处理变量
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    $tel = trim($_POST['tel']);
    $gender = $_POST['gender'];

    if($password1!=$password2){
        echo '密码与确认密码不符 请重新输入';
        header("refresh:2;url=register.html");
    }
    //sql语句
    $password1 = password_hash($password1,PASSWORD_DEFAULT);
    $password2 = password_hash($password2,PASSWORD_DEFAULT);
    $sql = "insert into zxz (`username`,`email`,`password`,`tel`,`gender`)
    values ('{$username}','{$email}','{$password2}','{$tel}','{$gender}')";
    $stmt = mysqli_prepare($link,$sql);
    $result = mysqli_stmt_execute($stmt);
    if($result){
        echo '注册成功';
        
    }else{
        echo '注册失败';
        header("refresh:2;url=register.html");
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
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>用户名:</td>
                <td>
                    <input type="text" name="username" placeholder="用户名">
                </td>
            </tr>
            <tr>
                <td>邮箱:</td>
                <td>
                    <input type="email" name="email" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td>密码:</td>
                <td>
                    <input type="password" name="password1" placeholder="密码">
                </td>
            </tr>
            <tr>
                <td>确认密码:</td>
                <td>
                    <input type="password" name="password2" placeholder="确认密码">
                </td>
            </tr>
            <tr>
                <td>手机号:</td>
                <td>
                    <input type="text" name="tel" placeholder="手机号">
                </td>
            </tr>
            <tr>
                <td>性别:</td>
                <td>
                    <input type="radio" name="gender" value="男" checked>男
                    <input type="radio" name="gender" value="女">女
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="注册账号">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>  