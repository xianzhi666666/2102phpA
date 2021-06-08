<?php
    //定义一个自动加载函数
    function autoload($class_name)
    {
        // echo "正在new" . $class_name;echo '<br>';
        // echo "类名" . $class_name;echo '<br>';
        // 根据类名找到类文件
        $class_file = $class_name . '.php';
        // echo "类文件" . $class_file;echo '<br>';
        include $class_file;
    }

    //注册自动加载函数
    spl_autoload_register('autoload');
    new Cat();echo '<br>';
    new Dog();echo '<br>';
    new Bird();echo '<br>';