<?php
    $cont = file_get_contents("tex1");
    
    $arr = explode(',',$cont);
    echo '<pre>';print_r($arr);echo '</pre>';
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
        <thead>
            <tr>
               <th>姓名</th>
               <th>年龄</th>
               <th>地址</th> 
            </tr>
        </thead>
        <tbody>
            <td><?php echo $arr[0];?></td>
            <td><?php 
                if($arr[1]>=18){
                    echo '成年';
                }else{
                    echo '未成年';
                }
            ?></td>
            <td><?php echo $arr[2];?></td>
        </tbody>
    </table>
</body>
</html>