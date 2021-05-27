<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        $list = [
            ['name'=>'姓名','age'=>'年龄','email'=>'Email'],
            ['name'=>'张三','age'=>'11','email'=>'zhangsan@qq.com'],
            ['name'=>'李四','age'=>'22','email'=>'lisi@qq.com'],
            ['name'=>'王五','age'=>'33','email'=>'wangwu@qq.com'],
            ['name'=>'赵六','age'=>'44','email'=>'zhaolu@qq.com'],
        ];
    ?>
<body>
    <table border='1px' align='center'>
        <?php
            foreach($list as $K=>$v){
                echo '<tr align="center">
                        <td>'.$v["name"].'</td>
                        <td>'.$v["age"].'</td>
                        <td>'.$v["email"].'</td>
                     </tr>';
            }
        ?>
    </table>
</body>
</html>