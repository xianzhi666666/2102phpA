<?php
    class Cat {
        //构造函数
        public function __construct(){
            echo "构造函数";
        }
        //析构函数
        public function __destruct(){
            echo "析构函数";
        }
    }
    //实例化
    $cat1 = new Cat();echo '<br>';
    unset($cat1);
