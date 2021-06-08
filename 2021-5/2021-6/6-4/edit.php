<?php
    $link = new mysqli('127.0.0.1','root','root','php2102');
    if($_POST){
        $goods_id=$_POST['goods_id'];
        $goods_name=$_POST['goods_name'];
        $shop_price=$_POST['shop_price'];
        $goods_number=$_POST['goods_number'];
        $sql1="update p_goods set goods_id='{$goods_id}',goods_name='{$goods_name}',shop_price='{$shop_price}',goods_name='{$goods_name}' where goods_id=$goods_id";
        $update = mysqli_query($link,$sql1);
        if($update){
            // header("refresh:1;url="")
            echo "修改成功";
            header("refresh:1;url=goods_list.php");
            die;
        }else{
            echo"修改失败";
            header("refresh:1;url=edit.php?id=$goods_id");die;
        }
        // echo $goods_id;die;
        // var_dump($_POST);die;
    }

    $id = $_GET['id'];
    // var_dump($id);
    $sql = "select * from p_goods where goods_id=$id";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo "<pre>";print_r($row);echo "</pre>";
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
    <form action="edit.php" method="post">
        <table>
            <tr>
                <td>商品ID:</td>
                <td>
                    <input type="text" name="goods_id" value="<?php echo $row[0]['goods_id']; ?>">
                </td>
            </tr>
            <tr>
                <td>商品名:</td>
                <td>
                    <input type="text" name="goods_name" value="<?php echo $row[0]['goods_name']; ?>">
                </td>
            </tr>
            <tr>
                <td>商品价格:</td>
                <td>
                    <input type="text" name="shop_price" value="<?php echo $row[0]['shop_price']; ?>">
                </td>
            </tr>
            <tr>
                <td>商品库存:</td>
                <td>
                    <input type="text" name="goods_number" value="<?php echo $row[0]['goods_number']; ?>">
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