<?
    # 配置变量使用
    # 默认在configs文件夹中

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    $smarty -> assign('style', 'shenlin');

    $smarty -> display('03.html');
