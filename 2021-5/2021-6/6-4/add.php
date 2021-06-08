<?php
    if($_POST){
        include "count.php";
        $goods_name = $_POST['goods_name'];
        $shop_price = $_POST['shop_price'];
        $goods_number = $_POST['goods_number'];

        $sql = "insert into p_goods (goods_name,shop_price,goods_number,goods_desc) values ('{$goods_name}','{$shop_price}','{$goods_number}','')";        $insert = mysqli_prepare($link,$sql);
        $rows = mysqli_stmt_execute($insert);
        // echo "<pre>";var_dump($insert);echo "</pre>";die;
        if($rows){
            echo "添加成功";
            header("refresh:1;url=goods_list.php");die;
        }else{
            echo "添加失败";die;
            header("refresh:1;url=add.php");die;
        }
    }
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
    <form action="add.php" method="post">
        <table>
            <tr>
                <td></td>
                <td><h2>商品添加</h2></td>
            </tr>
            <tr>
                <td>商品名:</td>
                <td>
                    <input type="text" name="goods_name">
                </td>
            </tr>
            <tr>
                <td>商品价格:</td>
                <td>
                    <input type="text" name="shop_price">
                </td>
            </tr>
            <tr>
                <td>商品库存:</td>
                <td>
                    <input type="text" name="goods_number">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>