<?php
    $p = $_GET['id'];
    include "count.php";
    $sql = "select * from p_goods where goods_id=$p";
    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo "<pre>";print_r ($rows[0]);echo "</pre>";
?>
商品ID:<?php echo $p; ?><br>
商品名:<?php echo $rows[0]['goods_name']; ?><br>
商品价格:<?php echo $rows[0]['shop_price']; ?><br>
上架时间:<?php echo date('Y-m-d H:i:s',$rows[0]['add_time']); ?><br>
浏览量:<?php echo $rows[0]['click_count']; ?><br>
<?php 
    $qu = $rows[0]['click_count']+1;
    $sql = "update p_goods set click_count=$qu where goods_id=$p";
    mysqli_query($link,$sql);
?>