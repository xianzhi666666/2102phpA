<?php
$userid=$_GET['userid'];

$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$db = 'php2102';
$link = new mysqli($host,$user,$pass,$db);
//  echo '<pre>';print_r($row);echo '</pre>';die;
    $sql = "delete from users where userid=$userid";
    $query = mysqli_query($link,$sql);
    if($query){
        echo "删除成功";
        header("refresh:1;url=table.php");
    }else{
        echo "删除失败";
        header("refresh:1;url=table.php");
    }
