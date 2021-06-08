<?php
    $str = file_get_contents("tex1");
    $arr = explode("\n",$str);
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
            <?php
                foreach($arr $k=>$v){
                    echo "<tr>";
                    echo "<td>";
                    
                    echo "</td>";
                    echo "<tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>