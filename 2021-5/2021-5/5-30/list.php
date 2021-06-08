<?php
    $username = trim($_POST['u_name']);
    $mobile = trim($_POST['year']);
    $password = trim($_POST['add']);
    $str1 = $username . ',' . $mobile . ',' . $password . "\n";
    file_put_contents('tex1',$str1,FILE_APPEND);
    echo '写入成功';

