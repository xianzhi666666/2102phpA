<?php
session_start();
unset($_SESSION['username']);
echo "ιεΊζε";
header("refresh:1;url=login.php");