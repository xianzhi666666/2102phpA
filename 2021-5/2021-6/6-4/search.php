<?php
    $goods_name = $_GET['goods_name'];
    include "count.php";
    $sql = "select * from p_goods where goods_name like '%$goods_name%' limit 5";
    $query = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($query,MYSQLI_ASSOC);
    echo "<pre>";print_r($rows[1]);echo "</pre>";die;
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
    <h2>关于 <?php echo $goods_name; ?> 搜索结果</h2>
    <ul>
        <?php
            foreach($rows as $k=>$v){
               $replace = "<span style='color:red'>{$goods_name}</span>";
               $new_name = str_replace($goods_name,$replace,$v['goods_name']);
                echo "<li>";
                echo "<a href=''>{$new_name}</a>";
                echo "</li>";
            }
        ?>
    </ul>
    <a href="goods_list.php?page=<?php echo $frist ?>">首页</a>|
    <a href="goods_list.php?page=<?php echo $b ?>">上一页</a>|
    <a href="goods_list.php?page=<?php echo $c ?>">下一页</a>|
    <a href="goods_list.php?page=<?php echo $last ?>">尾页</a>
</body>
</html>