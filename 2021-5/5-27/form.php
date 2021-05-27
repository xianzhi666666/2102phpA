<?php
    echo "<pre>";print_r($_POST);echo "</pre>";

    //获取用户名
    $u_name = $_POST['u_name'];
    //验证用户名是否符合规则 字母 至少六位
    $regular1 = "/^[a-z]{6,}$/i";
    // var_dump ( preg_match($regular,$u_name) );
    if( !preg_match($regular1,$u_name) ){
        die ("用户名不符合规则");
    }

    //获取手机号
    $u_tel = $_POST['u_tel'];
    $regular3 = "/^1[356789]\d{9}$/";
    if ( !preg_match($regular3,$u_tel) ){
        echo "请输入有效手机号";echo "<br>";
    }

    //获取密码名
    $u_pass1 = $_POST['u_pass1'];
    $u_pass2 = $_POST['u_pass2'];
    //密码正则 开头字母 数字字母下划线6-10位
    $mln = "/^[a-z]\w{5,9}$/";
    if (!preg_match($mln,$u_pass1)){
        echo "密码格式错误"."<br>";
    }else if ($u_pass1!=$u_pass2){
        echo "两密码不相等";echo "<br>";
    }



