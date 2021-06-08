<?php
    header("content-type:text/html;charset=utf-8");
    //从数据库中 取出 数据，展示在列表上

    //连接数据库
    $link = new mysqli('127.0.0.1','root','root','php2102');
    //查询的sql语句 打印出来并在Navicat验证是否正确
    $sql = "select * from question_bank";
    // echo $sql;
    //执行sql语句 查询的sql 返回结果集 用mysqli_query
    $qwer = mysqli_query($link,$sql);
    // var_dump($qwer);
    //从结果集中把数据取出来  用mysqli_fetch_all
    $rows = mysqli_fetch_all($qwer,1);
    // echo "<pre>";print_r ($rows);echo "</pre>";
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
    <table border="1px">
        <tr>
            <td>题库名称</td>
            <td>题库添加人</td>
            <td>题库添加时间</td>
            <td>操作</td>
        </tr>
        <?php foreach ($rows as $k=>$v){ ?>
            <tr>
                <td><?php echo $v['p_name']; ?></td>
                <td><?php echo $v['p_man']; ?></td>
                <td><?php echo date("Y-m-d H:i:s",$v['p_time']); ?></td>
                <td>
                    <!-- ?id= 传参数_GET -->
                    <a href="delete.php?id=<?php echo $v['p_id'] ?>">删除</a>|| 
                    <a href="alter.php?id=<?php echo $v['p_id'] ?>">修改</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>