<?php
session_start();
unset($_SESSION['username']);
echo "ιεΊζε";
header("refresh:2;url=login.html");