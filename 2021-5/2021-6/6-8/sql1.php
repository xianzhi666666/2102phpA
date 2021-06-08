<?php
    $link = new mysqli('127.0.0.1','root','root','php2102');

    echo "接收到的GET参数：" . $_GET['name'];echo '<br>';
    $id = $_GET['name'];
    $sql = "select user_id,user_name from p_users where user_name='{$id}'";
    echo $sql;echo '</br>';

    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);

    echo '<pre>';print_r($rows);echo '</pre>';