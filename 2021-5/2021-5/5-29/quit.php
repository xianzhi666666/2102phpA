<?php
session_start();
unset($_SESSION['username']);
echo "退出成功";
header("refresh:1;url=login.php");