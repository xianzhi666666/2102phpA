<?php
    $page = 1;
    if($_GET){
        $page = intval($_GET['page']);
        if($page<1){
            $page=1;
        }
    }
    $abc = 10;
    // 上一页
    $prev = $page-1;
    if($page<1){
        $page=1;
    }
    //下一页
    $next = $page+1;
    $a = ($page-1)*$abc;
    
    $sql = "select * from p_goods order by add_time desc limit $a,$abc";
    include "../6-4/count.php";
    // 首页
    $frist = 1;

    // 尾页
    $link = new mysqli('127.0.0.1','root','root','php2102');
    $sql = "select count(goods_idd) from p_goods";
    $res = mysqli_query($link,$sql);
    $roww = mysqli_fetch_all($res,MYSQLI_ASSOC);

    $last = ceil($roww[0]['count(goods_id)']/10);
    // echo "<pre>";print_r($roww[0]['count(goods_id)']/10);echo "</pre>";
    
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
            foreach ($rows as $k=>$v){
                echo "<li>";
                echo "<a href='../6-4/goods.php?id={$v['goods_id']}'>{$v['goods_name']}</a>";
                echo " <a href='edit.php?id={$v['goods_id']}'>编辑商品信息</a>";
                echo "</li>";
            }
        ?>
    </ul>
<hr>
    <a href="goods_list.php?page=<?php echo $frist ?>">首页</a>|
    <a href="goods_list.php?page=<?php echo $prev ?>">上一页</a>|
    <a href="goods_list.php?page=<?php echo $next ?>">下一页</a>|
    <a href="goods_list.php?page=<?php echo $last ?>">尾页</a>
</body>
</html>