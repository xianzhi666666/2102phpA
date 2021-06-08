<?php
$ye=0;
if($_GET){
    $page=$_GET['ye'];
    if($page<0){
        echo "<script>alert('这已经是第一页了！！！')</script>";
        $page=0;
    }
    $ye=$page;
}
$a=$ye*10;
$link = new mysqli('127.0.0.1','root','root','php2102');
$sql = "select * from p_goods order by add_time desc limit $a,10";
$qwer = mysqli_query($link,$sql);
$rows = mysqli_fetch_all($qwer,MYSQLI_ASSOC);
// echo "<pre>";print_r($rows);echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr>
    <ul>
        <?php
            foreach($rows as $k=>$v){
                echo "<li>";
                echo "<a href='goods.php?id={$v['goods_id']}'>{$v['goods_name']}</a>";
                echo "</li>";
            };
        ?>
    </ul>
<hr>
<?php
$b=$ye+1;
$c=$ye-1;
?>
   <a href="goods_list.php?ye=<?php echo $c ?>">上一页</a> |
   <a href="goods_list.php?ye=<?php echo $b ?>">下一页</a>
</body>
</html>
