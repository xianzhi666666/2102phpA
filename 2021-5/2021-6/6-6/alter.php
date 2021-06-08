<?php        
    //连接数据库
    $link = new mysqli('127.0.0.1','root','root','php2102');
    if($_POST){
        $p_id=$_POST['p_id'];
        $p_name = $_POST['p_name'];
        $p_man = $_POST['p_man'];
        // echo $p_name;echo '<br>';
        // echo $p_man;
        //要执行的更新sql语句 并在Navicat验证
        $sql = "update question_bank set p_name='$p_name',p_man='$p_man' where p_id=$p_id";
        // echo $sql;
        //执行用 mysqli_query
        $qwer = mysqli_query($link,$sql);
        // var_dump($qwer);die;
        if($qwer){
            echo "执行成功";
            header("refresh:1;url=list.php");die;
        }else{
            echo "执行失败";
            header("refresh:1;url=alter.php?id=$p_id");die;
            
        }
    }
    //此页面为从数据库中修改数据
    $p_id = $_GET['id'];
    // echo $p_id;
    $sql = "select * from question_bank where p_id=$p_id";
    $qwer = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($qwer,1);
    // echo "<pre>";print_r($rows);echo "</pre>";
    //接受alter数据 _POST
    
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
    <form action="alter.php" method="POST">
        <input type="hidden" name="p_id" value="<?php echo $rows[0]['p_id']?>">
        <table>
            <tr>
                <td>修改题库名称:</td>
                <td>
                    <input type="text" name="p_name" value="<?php echo $rows[0]['p_name']; ?>">
                </td>
            </tr>
            <tr>
                <td>修改题库添加人:</td>
                <td>
                    <input type="text" name="p_man" value="<?php echo $rows[0]['p_man']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="修改">
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>