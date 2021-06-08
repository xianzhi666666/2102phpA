<?php
    //接收list.php传入的id  是否传入
    $p_id = $_GET['id'];
    // echo $p_id;
    //连接数据库
    $link = new mysqli('127.0.0.1','root','root','php2102');
    //执行删除的sql语句  并在Navicat验证
    $sql = "delete from question_bank where p_id=$p_id";
    // echo $sql;
    //执行并验证
    $qwer = mysqli_query($link,$sql);

    if($qwer){
        echo "删除成功";
        header("refresh:1;url=list.php");
    }else{
        echo "删除失败";
        header("refresh:1;url=list.php");
    }