<?php
    $arr4 = [
        "p1"    => ["name"=>"zhangsan","age"=>11],
        "p2"    => ["name"=>"lisi","age"=>22],
        "p3"    => ["name"=>"wangwu","age"=>33],
        "p4"    => ["name"=>"zhaoliu","age"=>44],
    ];
    
    // echo $arr4['p2']['name'];
    
    foreach($arr4 as $k=>$v){
        echo "姓名：" . $v['name'];
        echo "=== 年龄:" . $v['age'];echo '</br>';
    }