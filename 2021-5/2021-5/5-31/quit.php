<?php
session_start();
unset($_SESSION['username']);
echo "退出成功";
header("refresh:2;url=login.html");