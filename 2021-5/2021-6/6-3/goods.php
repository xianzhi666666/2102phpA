<?php
    $p = $_GET['id'];
    $link = new mysqli('127.0.0.1','root','root','php2102');
    $sql = "select * from p_goods where goods_id=$p";
    $qwer = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($qwer,MYSQLI_ASSOC);
    // echo "<pre>";print_r($rows);echo "</pre>";
?>
商品ID:<?php echo $p; ?><br>
商品名:<?php echo $rows[0]['goods_name']; ?><br>
商品价格:<?php echo $rows[0]['shop_price']; ?><br>
上架时间:<?php echo date("Y-m-d H:i:s",$rows[0]['add_time']); ?><br>
浏览量:<?php echo $rows[0]['click_count']; ?><br>
<?php
    $y = $rows[0]['click_count']+1;
    $sql = "update p_goods set click_count=$y where goods_id=$p";
    mysqli_query($link,$sql);
?>