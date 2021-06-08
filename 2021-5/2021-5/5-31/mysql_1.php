<?php
//接收URL参数  强制类型转换
// $userid = intval( $_GET['id'] );
$username = trim( $_GET['name'] );
//使用mysqli连接MYSQL
$host = "127.0.0.1";    //Mysql的主机地址
$user = 'root';         //数据库的用户名
$pass = 'root';         //数据库密码
$db = "php2102";        //使用的数据库
$link = new mysqli($host,$user,$pass,$db);
//获取uaer表中的数据
// $sql = "select * from users where userid=$userid";
$sql = 'select * from users where userid="'.$username.'"';
//执行一个 查询
$result = mysqli_query($link,$sql);
//获取记录
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<pre>';print_r($rows);echo '</pre>';
