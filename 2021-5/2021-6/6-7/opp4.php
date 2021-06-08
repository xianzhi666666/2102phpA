<?php
    class Person {
        public $age = 0;
        public $gender = "未知";
        public $weight = 0;

        public function set(){
            echo "吃东西";
        }
        public function cry(){
            echo "笑";
        }
    }
    //继承性 A extends B   A继承B  A的属性和方法可以继承B
    class balck extends Person {
        public function set(){
            echo "不吃东西";
        }
    }
    //实例化
    $people = new balck();
    $b = $people->age;     
    echo $b;echo '<hr>';
    
    $people->set();