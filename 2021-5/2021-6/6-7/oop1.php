<?php
    //定义一个类  类是由 属性(变量) 和 方法(函数)组成
    class people {
        //颜色 成员属性(变量)
        public $color = "black";
        protected $name = "猫";
        private $sex = "Male";
        private $weight;

        //定义一个行为
        public function climbTree(){
            echo "在跑步";
        }

        public function pchMouse(){
            echo "去吃饭";
        }

        public function test()   //公共的
        {
            //在类的内部
            $this->sleep1();
        }

        protected function sleep1()  //受保护的
        {
            echo $this->color;
        }

        private function eat()  //私有的
        {
            echo "私有方法";
        }
    }
    //将类实例化 得到一个对象
    $peo1 = new people();
    // var_dump($peo1);echo '<hr>';

    $c = $peo1->color;   //访问成员变量
    var_dump($c);

    echo '<hr>';
    $peo1->climbTree();   //访问成员方法
    echo '<hr>';
    $peo1->pchMouse();
    echo '<hr>';
    echo "调用test方法：";
    $peo1->test();