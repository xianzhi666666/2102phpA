<?php
    $page = 0;
    if($_GET){
        $ye = $_GET['page'];
        if($ye<0){
            echo "<script>alert('这已经是最新一页了')</script>";
            $ye=0;
        }
        $page=$ye;
    }
    $a = $page*10;
    include "count.php";
    $sql = "select * from p_goods order by add_time desc limit $a,10";
    $qwer = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($qwer,MYSQLI_ASSOC);
    // echo "<pre>";print_r($rows[0]);echo "</pre>";
    // 首页
    $frist = 1;
    // 尾页
    // $link = new mysqli('127.0.0.1','root','root','php2102');
    $sql = "select count(goods_id) from p_goods";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_all($res,MYSQLI_ASSOC);

    $last = ceil($row[0]['count(goods_id)']/10);
    // echo "<pre>";print_r($row[0]['count(goods_id)']/10);echo "</pre>";
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
                echo " <a href='edit.php?id={$v['goods_id']}'>编辑商品信息</a>";
                echo "</li>";
            }
        ?>
    </ul>
    <hr>
    <?php
        $b = $page-1;
        $c = $page+1;

    ?>
    <a href="goods_list.php?page=<?php echo $frist ?>">首页</a>|
    <a href="goods_list.php?page=<?php echo $b ?>">上一页</a>|
    <a href="goods_list.php?page=<?php echo $c ?>">下一页</a>|
    <a href="goods_list.php?page=<?php echo $last ?>">尾页</a>
</body>
</html>