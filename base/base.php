<?php
    /*
    echo与print一样，可以是一个方法，也可以是一个操作符；
    echo可以使用逗号输出多个字符串，而print不可；
    echo效率高，无返回值；
    print固定返回1
    */
    // echo('Hello, PHP.');
    // echo 'Hi, developer.';
    // echo '<br>';
    // print('Hello, php.');
    // print 'Hi, dev';
    // print '<br>';

    /* PHP没有声明变量的命令，弱类型*/
    // $str = 'Hello, PHP.';
    // echo "str: $str";

    /* PHP有局部，全局，静态，参数4个变量作用域*/
    /*$a = 'aa'; // 全局变量
    function echoStr() {
        $b = 'bb';
        static $c = 2; // 保存了之前的值，但还是函数的局部变量
        global $a; // 使用全局变量需要使用global关键字
        echo $a, '<hr>', $b;
        echo $c += 2;
    }
    echoStr();
    echoStr();
    echoStr();
    echoStr();*/
    // echo $b; // 引用局部变量报错
    // $GLOBALS; // 全局变量的存储对象
    // static静态关键字，被修饰的变量不能删除
    
    /* 数据类型
    String, Integer, Float, Boolean, Array, Object, Null
    不能单纯对对象，方法进行检测
    */
    /*class obj {
        var $a = 'aa';
    }
    function fun () {
        return 123;
    }
    var_dump(123);// 类型检测
    echo '<br>';
    var_dump(12.3);
    echo '<br>';
    var_dump('123');
    echo '<br>';
    var_dump(array(1, 2, 3));
    echo '<br>';
    var_dump(true);
    echo '<br>';
    var_dump(null);
    echo '<br>';
    var_dump(new obj);
    echo '<br>';
    var_dump(fun());*/

    /* 常量
    变量名，值，是否大小写不敏感(默认false，敏感)
    */
    define('PI', 3.14);
    echo PI;
?>
