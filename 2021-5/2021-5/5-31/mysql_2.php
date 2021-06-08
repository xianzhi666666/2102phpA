<?php
    $host = "127.0.0.1";
    $user = 'root';
    $pass = 'root';
    $db = 'php2102';
    $link = new mysqli($host,$user,$pass,$db);
    //向数据库写入数据
    $sql = "insert into users (`username`,`email`,`mobile`,`password`,`account`)
    values ('xiaoming','xiaoming@qq.com','88888888888','aaaaaaaa','200000')";
    //准备阶段
    $stmt = mysqli_prepare($link,$sql);
    echo '<pre>';print_r($stmt);echo '</pre>';
    echo '<br>';
    //执行阶段
    mysqli_stmt_execute($stmt);
    echo '<pre>';print_r($stmt);echo '</pre>';