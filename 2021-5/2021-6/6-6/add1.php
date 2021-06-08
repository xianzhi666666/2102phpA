<?php
    header("content-type:text/html;charset=utf-8");
    //向数据库 添加 数据

    //接受参数 是否传入参数
    $p_time = time();
    $p_name = $_POST['p_name'];
    $p_man = $_POST['p_man'];
    // echo $p_name;echo '<br>'; //检查是否传入了数据
    // echo $p_man;
    if(empty($p_name)){
        echo "题库名不能为空";
        header("refresh:1;url=add1.html");
        die;
    }
    if(empty($p_man)){
        echo "题库添加人不能为空";
        header("refresh:1;url=add1.html");
        die;
    }
    //连接数据库 是否连接
    $link = new mysqli('127.0.0.1','root','root','php2102');
    // var_dump($link);
    //向数据库添加的sql语句 是否正确 打印并在Navicat中执行
    $sql = "insert into question_bank (p_name,p_man,p_time) values ('{$p_name}','{$p_man}','{$p_time}')";
    // echo $sql;
    //准备和执行sql语句  添加是否成功 执行添加的sql语句 反回的是bool
    $qwer = mysqli_query($link,$sql);
    // var_dump($qwer);//true成功 false失败
    if($qwer){
        echo "添加成功";
        header("refresh:1;url=list.php");
    }else{
        echo "添加失败";
        header("refresh:1;url=add1.html");
    }

