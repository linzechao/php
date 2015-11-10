<?php
    // 在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句
    declare(encoding='UTF-8');
    namespace MyProject;
    // namespace MyProject\aa\bb; // 多层次，子命名空间

    // 超级全局变量
    $name = 'Super';
    echo $GLOBALS['name']; // 变量  

    // 服务
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo $_SERVER['QUERY_STRING'];

    // 表单
    // echo $_POST['a'];
    echo '<br>';
    echo $_GET['a'];

    // 请求
    // $_REQUEST


    // $_FILES
    // $_ENV
    // $_COOKIE
    // $_SESSION

    // 魔术变量
    echo '<br>当前行数：'.__LINE__;
    echo '<br>该文件路径：'.__FILE__;
    echo '<br>该文件处于：'.__DIR__;
    class cls {
        function fun() {
            echo '<br>函数名：'.__FUNCTION__;
            echo '<br>类的方法名：'.__METHOD__;
            echo '<br>类名：'.__CLASS__;
        }
    }
    $c = new cls();
    $c -> fun();
    echo '<br>命名空间：'.__NAMESPACE__;
?>
