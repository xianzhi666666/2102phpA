<?php
    $arr = ["zhangsan","lisi","wangwu","ABC","liu"];
    $arr2 = ["aaa","bbb","ccc","ddd"];
    // echo '<pre>';print_r($arr);echo '</pre>';
    // 排序
    // sort($arr);
    // echo '<pre>';print_r($arr);echo '</pre>';

    //倒序
    // $f = array_reverse($arr);
    // echo '<pre>';print_r($f);echo '</pre>';

    //打乱数组
    // shuffle($arr);
    // echo '<pre>';print_r($arr);echo '</pre>';

    //检查数组中是否存在某个值 真true 假false
    // $f = in_array("zhangsan",$arr);
    // echo '<pre>';var_dump($f);echo '</pre>';

    //array_rand — 从数组中随机取出一个或多个随机键
    // $k = array_rand($arr,1);
    // echo '<pre>';echo $arr[$k];echo '</pre>';

    // array_merge — 合并一个或多个数组
    // $arr3 = array_merge($arr,$arr2);
    // echo '<pre>';print_r($arr3);echo '</pre>';

    $arr3 = [
        "name"   =>   "zhangsan",
        "age"    =>   "22",
        "email"  =>   "zhangsan@qq.com"
    ];
    // array_values() — 返回数组中的值
    // $v = array_values($arr);
    // echo '<pre>';print_r($v);echo '</pre>';

    $arr4 = [
        ["name"=>"zhangsan","age"=>"11","email"=>"zhangsan@qq.com"],
        ["name"=>"lisi","age"=>"22","email"=>"lisi@qq.com"],
        ["name"=>"wangwu","age"=>"33","email"=>"wangwu@qq.com"],
        ["name"=>"zhaoliu","age"=>"44","email"=>"zhaoliu@qq.com"],
    ];



