<?
    # 变量调节器

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    # 路径设置
    # public文件都是相对于入口文件

    $smarty -> assign('word', 'Mr. Super');

    $smarty -> display('06.html');
