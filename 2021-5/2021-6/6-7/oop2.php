<?php
    //定义一个类  类是由 属性(变量) 和 方法(函数)组成
    class people {
        //颜色 成员属性(变量)
        public $color = "black";
        protected $name = "猫";
        private $sex = "Male";
        private $weight;

        //构造函数
        public function __construct($name,$sex,$weight){
            echo "name:".$name;echo '<br>';
            echo "sex:".$sex;echo '<br>';
            echo "weight:".$weight;echo '<br>';
            $this->weight = $weight;  //给属性赋值
        }
        public function showWeight(){
            echo "重量：".$this->weight;
        }
        //析构函数
        public function __destruct(){
            echo "析构函数";
        }
    }
    //将类实例化 得到一个对象
    $peo1 = new people("大橘猫","Male","5kg");echo '<br>';
    $peo1->showWeight();
    echo '<hr>';
    $peo2 = new people("小橘猫","Female","3kg");echo '<br>';
    $peo2->showWeight();echo '<br>';
    $b = $peo2->color;
    echo $b;echo '<br>';
