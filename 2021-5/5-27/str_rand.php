<?php
    //生成随机字符串 $length是 返回字符串的长度
    function str_rand($length=8){
        $str0 = 'ABCDEFGHIJKMNPQRSTUVWXYZzbcdefghijkmnpqrstuvwxyz23456789';
        $str = "";
        for($i=0;$i<$length;$i++){
           $num = mt_rand(0,55);
        //    echo "随机数:".$num;
        //    echo "随机的字母：".$str0[$num];echo '<br>';
           $c = $str0[$num];
           $str .= $c; 
        }
        return $str;
    }
    
    // echo str_rand();
    var_dump(str_rand());
