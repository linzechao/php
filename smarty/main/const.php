<?
    # 全局变量、常量的使用

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    # 常量
    define('HOST', 'http://www.sc.com');

    # 使用全局变量
    # $_GET, $_POST, $_FILES, $GLOBALS, $_COOKIE, $_SESSION, $SEVSER, $REQUEST, $_ENV, 常量信息
    # $GLOBALS, $_FILES不能用

    $smarty -> assign('name', $_GET['name']);

    $smarty -> display('02.html');
