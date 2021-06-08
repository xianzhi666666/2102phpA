<?php
    session_start();
    if(empty($_SESSION['username'])){
        echo "请登录";
        header("refresh:1;url='login.php'");die;
    }